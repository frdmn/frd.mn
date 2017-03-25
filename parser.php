<?php
  // This file is generated by Composer
  require_once 'vendor/autoload.php';

  // Load .env file
  Dotenv::load(__DIR__);

  // Function to calculate the percentage
  function percent($amount, $total) {
    $countA = $amount / $total;
    $countB = $countA * 100;
    // Round number
    $count = number_format($countB, 0);
    return $count;
  }

  // Load portfolio data
  $info_json = json_decode(file_get_contents("data/info.json"), true);

  if (!getenv('GITHUB_API_TOKEN')) {
    die('No "GITHUB_API_TOKEN" found in .env file!');
  }

  // Initiate API client
  $client = new \Github\Client();

  // Authenticate using API token in .env
  $client->authenticate(getenv('GITHUB_API_TOKEN'), null, Github\Client::AUTH_HTTP_TOKEN);

  // I often forget to add a project, so passing "list" as argument
  // to this script, will only generate a list of all existing GitHub
  // repositories as well as associate them with their creation date
  // so you can see which ones you've forget to add here recently
  if (@$argv[1] === 'list') {
    // We need to create a pagniation to parse more than 30 repositories
    $repositoryApi = $client->api('user');
    $paginator = new Github\ResultPager($client);
    $repositories = $paginator->fetchAll($repositoryApi, 'repositories', array('frdmn'));

    // Iterate through repositories
    foreach ($repositories as $project) {
      $forkString = ($project['fork'] ? '(F) ' : '');
      echo $project['created_at'].' '.$forkString.$project['name']."\n";
    }

    // Exit without status code
    exit(0);
  }

  foreach ($info_json['projects'] as $name => $project) {
    $repository = $client->api('repo')->show($project['owner'], $project['alias']);

    $json_prepare['projects'][$project['owner'].'/'.$project['alias']]['name'] = $repository['name'];
    $json_prepare['projects'][$project['owner'].'/'.$project['alias']]['description'] = $repository['description'];
    $json_prepare['projects'][$project['owner'].'/'.$project['alias']]['github'] = $repository['full_name'];
    $json_prepare['projects'][$project['owner'].'/'.$project['alias']]['stars'] = $repository['stargazers_count'];
    $json_prepare['projects'][$project['owner'].'/'.$project['alias']]['watcher'] = $repository['watchers_count'];
    $json_prepare['projects'][$project['owner'].'/'.$project['alias']]['forks'] = $repository['forks'];
    $json_prepare['projects'][$project['owner'].'/'.$project['alias']]['language'] = $repository['language'];
    $json_prepare['projects'][$project['owner'].'/'.$project['alias']]['created'] = $repository['created_at'];
    $json_prepare['projects'][$project['owner'].'/'.$project['alias']]['updated'] = $repository['updated_at'];

    // Languages
    $languages = $client->api('repo')->languages($project['owner'], $project['alias']);
    foreach ($languages as $language => $size) {
      $json_prepare['projects'][$project['owner'].'/'.$project['alias']]['languages'][$language] = percent($size, array_sum($languages));
    }
  }

  // Encode as JSON and print
  $json = json_encode($json_prepare, JSON_PRETTY_PRINT);
  echo $json;

  // Dump if /?dump is set
  if (isset($_GET['dump'])) {
    var_dump($repositories);
  }

  // Exit without status code
  exit(0);
