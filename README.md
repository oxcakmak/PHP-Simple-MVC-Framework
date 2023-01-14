
# PHP Simple MVC Framework

PHP Simple MVC Framework, It allows you to create content according to your needs without the need for any plugin.




## How do I make a custom page?
controller - home
```php
/* If you are going to pull data, model file, if not, just view will be enough. */
<?php
class ExamplePage extends Controller{

    public function index($data=[]){
        $this->render->view('examplePage', $data);
    }
    public function load_data(){

        $model = $this->load_model('SampleModel');

        $data = $model->sample_query();

        $this->render->view("load_data", ["query_data" => $data]);
    }

}
?>
```
views - example
```php
<?php
echo 'this is admin page';
?>
```

## Destek

For support, send an e-mail to oxcakmak@hotmail.com.

  
