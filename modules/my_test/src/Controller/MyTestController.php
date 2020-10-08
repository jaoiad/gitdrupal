<?php

namespace Drupal\my_test\Controller;

class MyTestController {

public function bienvenu() {

return array(

'#title' => 'Bienvenu!',

'#markup' => 'Content for My First Module.'

);

}

}