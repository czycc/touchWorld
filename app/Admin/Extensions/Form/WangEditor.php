<?php
namespace App\Admin\Extensions\Form;

use Encore\Admin\Form\Field;

class WangEditor extends Field
{
    protected $view = 'admin::form.editor';

    protected static $css = [
        '/packages/wangEditor-2.1.23/dist/css/wangEditor.css',
    ];

    protected static $js = [
        '/packages/wangEditor-2.1.23/dist/js/wangEditor.js',
    ];

    public function render()
    {
        $this->script = <<<EOT
var editor = new wangEditor('{$this->id}');
editor.config.uploadImgUrl = '/api/image/upload';
    editor.config.hideLinkImg = true;
    editor.create();

EOT;
        return parent::render();

    }
}