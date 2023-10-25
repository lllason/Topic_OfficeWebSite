<?php

namespace App\Admin\Controllers;

use App\Models\Chatbot;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ChatBotController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Chatbot';


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Chatbot());

        $grid->column('id', __('Id'));
        $grid->column('rul_name', __('規則目錄'));
        $grid->column('intent1', __('意圖1'));
        $grid->column('example1', __('問題範例1'));
        $grid->column('response1', __('Response'));

        $grid->column('intent2', __('意圖2'));
        $grid->column('example2', __('Example'));
        $grid->column('response2', __('Response'));

        $grid->column('intent3', __('意圖3'));
        $grid->column('example3', __('Example'));
        $grid->column('response3', __('Response'));

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
        $show = new Show(Chatbot::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('rule_name', __('Name'));
        $show->field('intent1', __('Intent'));
        $show->field('example1', __('Example'));
        $show->field('response1', __('Response'));

        $show->field('intent2', __('Intent'));
        $show->field('example2', __('Example'));
        $show->field('response2', __('Response'));

        $show->field('intent3', __('Intent'));
        $show->field('example3', __('Example'));
        $show->field('response3', __('Response'));

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
        $form = new Form(new Chatbot());
        $form->text('rule_name', __('規則目錄'));
        $form->text('intent1', __('Intent'));
        $form->text('example2', __('Intent'));
        $form->text('response3', __('Response'));

        $form->text('intent2', __('Intent'));
        $form->text('example2', __('Intent'));
        $form->text('response2', __('Response'));

        $form->text('intent3', __('Intent'));
        $form->text('example3', __('Intent'));
        $form->text('response3', __('Response'));
        
        $form->text('created_at', __('Created at'));
        $form->text('updated_at', __('Updated at'));

        return $form;
    }
}
