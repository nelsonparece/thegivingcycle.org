<?php
//require_once('aweber_api/aweber_api.php');
require_once('aweber_api/aweber.php');
 
// Step 1: assign these values from https://labs.aweber.com/apps
$consumerKey = 'AkyXaR76JVW71DqSP7099sXf';
$consumerSecret = 'hDqPnT8tpRTHBN6snVpQ2EhI19xAL34ofRJZimK5';
 
// Step 2: load this PHP file in a web browser, and follow the instructions to set
// the following variables:
$accessKey = 'AgfiD2cytO7Lox7zsi0WHsEv';
$accessSecret = 'jJX42RxeEcSrdghU70wjvhgtphJhOTlsXS1t1UKU';
//$list_id = '4340188';
//$list_id = $argv[5];
$list_id = $argv[3];
 
if (!$consumerKey || !$consumerSecret){
    print "You need to assign \$consumerKey and \$consumerSecret at the top of this script and reload.<br><br>" .
        "These are listed on <a href=\"https://labs.aweber.com/apps\" target=\"_blank\">https://labs.aweber.com/apps<a><br>\n";
    exit;
}
 
$aweber = new AWeberAPI($consumerKey, $consumerSecret);
if (!$accessKey || !$accessSecret){
    display_access_tokens($aweber);
}
 
try { 
    $account = $aweber->getAccount($accessKey, $accessSecret);
    $account_id = $account->id;
 
    if (!$list_id){
        display_available_lists($account);
        exit;
    }
 
    print "Your script is configured properly! " . 
        "You can now start to develop your API calls, see the example in this script.<br><br>" .
        "Be sure to set \$test_email if you are going to use the example<p>";
 
    //example: create a subscriber
    //$test_email = 'newsletter@thegivingcycle.org';
    //$test_email = $argv[3];
    //$test_email = $argv[1];
    //if (!$test_email){
    //print "Assign a valid email address to \$test_email and retry";
    //exit;
    //}
    $listURL = "/accounts/{$account_id}/lists/{$list_id}"; 
    $list = $account->loadFromUrl($listURL);
    //'ip_address' => $argv[4];
    //'email' => $test_email,
    $params = array( 
        'email' => $argv[1],
        'ip_address' => $argv[2],
        'ad_tracking' => 'newslettersignup', 
        'misc_notes' => 'autoaddtotgcnewsletterlist', 
        'name' => '',
	'is_verified' => 'true',
	'status' => 'subscribed',
	'subscription_method' => 'api',
	'subscription_url' => 'http://thegivingcycle.org/index.php'
    ); 
    $subscribers = $list->subscribers; 
    $new_subscriber = $subscribers->create($params);
    print "{$test_email} was added to the {$list->name} list!";

//require_once('function.php');
//wordpress_register($firstname,$lastname,$email);
//wordpress_register($argv[1],$argv[2],$argv[3]);

} catch(AWeberAPIException $exc) { 
    print "<h3>AWeberAPIException:<h3>"; 
    print " <li> Type: $exc->type <br>"; 
    print " <li> Msg : $exc->message <br>"; 
    print " <li> Docs: $exc->documentation_url <br>"; 
    print "<hr>"; 
    exit(1); 
}
 
function get_self(){
    return 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}
 
function display_available_lists($account){
    print "Please add one of the lines of PHP Code below to the top of your script for the proper list<br>" .
            "then click <a href=\"" . get_self() . "\">here</a> to continue<p>";
 
    $listURL ="/accounts/{$account->id}/lists/"; 
    $lists = $account->loadFromUrl($listURL);
    foreach($lists->data['entries'] as $list ){
        print "\$list_id = '{$list['id']}'; // list name:{$list['name']}\n</br>";
    }
}
 
function display_access_tokens($aweber){
    if (isset($_GET['oauth_token']) && isset($_GET['oauth_verifier'])){
 
        $aweber->user->requestToken = $_GET['oauth_token'];
        $aweber->user->verifier = $_GET['oauth_verifier'];
        $aweber->user->tokenSecret = $_COOKIE['secret'];
 
        list($accessTokenKey, $accessTokenSecret) = $aweber->getAccessToken();
 
        print "Please add these lines of code to the top of your script:<br><br>" .
                "\$accessKey = '{$accessTokenKey}';\n<br>" . 
                "\$accessSecret = '{$accessTokenSecret}';\n<br>" .
                "<br><br>" .
                "Then click <a href=\"" . get_self() . "\">here</a> to continue";
        exit;
    }
 
    if(!isset($_SERVER['HTTP_USER_AGENT'])){
        print "This request must be made from a web browser\n";
        exit;
    }
 
    $callbackURL = get_self();
    list($key, $secret) = $aweber->getRequestToken($callbackURL);
    $authorizationURL = $aweber->getAuthorizeUrl();
 
    setcookie('secret', $secret);
 
    header("Location: $authorizationURL");
    exit();
}
?>
