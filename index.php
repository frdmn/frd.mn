<?php
  // Load composer packages
  require_once 'vendor/autoload.php';

  /**
   * Returns the full script URL
   *
   * @return string $url
   */

  function returnFullURL(){
    return ((empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') ? 'http://' : 'https://').$_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']);
  }

  /**
   * Function to construct the absolute project URL. Makes use of the
   * returnFullURL() function.
   *
   * @param string $project
   * @return string $url
   */

  function prepareProjectURL($project){
    return returnFullURL().$project;
  }

  /**
   * Return object with data loaded from JSON files data/github.json
   * and data/info.json
   *
   * @return obj $data
   */

  function loadJSONData(){
    // Load and store portfolio data
    $info_file = file_get_contents("data/info.json");
    $github_file = file_get_contents("data/github.json");

    // Convert from JSON
    $info_json = json_decode($info_file, true);
    $github_json = json_decode($github_file, true);

    // Assign to variables
    $data['info'] = $info_json['information'];
    $data['projects'] = $info_json['projects'];
    $data['github'] = $github_json['projects'];

    // Add meta
    $data['meta']['dir'] = __DIR__;

    // Return data
    return $data;
  }

  // Create new Plates instance and map template folders
  $templates = new League\Plates\Engine('templates');

  // Create new Klein router instance
  $router = new Klein\Klein();

  // Load JSON data into variable
  $data = loadJSONData();

  /**
   * Route for home page
   *
   * @uses Klein\Klein::respond()
   * @example http://frd.mn/
   */

  $router->respond('GET', '/', function () use ($templates, $data)  {
    // Render "home" page
    echo $templates->render('pages/home', compact('data'));
  });

  /**
   * Route for project page
   *
   * @uses Klein\Klein::respond()
   * @example http://frd.mn/test-project
   * @param string $project
   */

  $router->respond('GET', '/[:project]', function ($request, $response) use ($templates, $data)  {
    // Create new Markdown parser instance
    $markdown = new cebe\markdown\GithubMarkdown();
    // Store "project" request
    $alias = $request->project;

    // Check if project actually exists
    if (isset($data['projects'][$alias])) {
      // Render "projects" page
      echo $templates->render('pages/projects', compact('data', 'alias', 'markdown'));
    } else {
      // Create error array
      $error['code'] = 404;
      $error['message'] = 'Project not found';

      // Set 404 HTTP status
      $response->code(404);

      // Render "error" page
      echo $templates->render('pages/error', compact('data', 'alias', 'error'));
    }
  });

  // Dispatch router
  $router->dispatch();
?>
