<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('price', __('Price'));
        $grid->column('summary', __('Summary'));
        $grid->column('imgLink')->image();
        $grid->column('docLink', __('DocLink'));
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('price', __('Price'));
        $show->field('summary', __('Summary'));
        $show->field('imgLink', __('ImgLink'));
        $show->field('docLink', __('DocLink'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());
        $form->text('name', __('Name'));
        $form->number('price', __('Price'));
        $form->textarea('summary', __('Summary'));
        $form->image('imgLink', __('imgLink'))->move("images/".$this->title)->name(function ($file) {
            return date("YmdHis").'.'.$file->guessExtension();
        });


        $form->file('docLink', __('DocLink'));
        $form->switch('status', __('Status'));


        $form->submitted(function (Form $form) {
            /*
            echo "submitted";
            dump($form);
            exit;
            */
        });

        $form->saving(function (Form $form) {
            /*
            echo "saving";
            dump($_REQUEST);
            dump($form);
            exit;
            */
        });        
        return $form;
    }
}
