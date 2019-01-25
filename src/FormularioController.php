<?php
    namespace EJFORM;
          
    class FormularioController
    {
    
        public function __construct()
        {
    
        }

        public function form()

        {
$html = <<<'EOT'
            <form method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="exampleInputEmail1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputText">Example Text</label>
                    <input type="text" class="form-control" name="exampleInputText" id="exampleInputText" placeholder="Example text">
                </div>
                
                <button type="submit" name="enviar_form" class="btn btn-primary">Submit</button>
            </form>
EOT;
            return $html;

        }

        public function SaveData()
        {
            $exampleInputEmail1 = sanitize_text_field($_POST['exampleInputEmail1']);
            $exampleInputText   = sanitize_text_field($_POST['exampleInputText']);
            die(print_r($_POST));
        }
    }