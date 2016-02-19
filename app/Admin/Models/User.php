<?php

/*
 * This is a simple example of the main features.
 * For full list see documentation.
 */

Admin::model('App\User')->title('Users')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with('link');
	$display->order([[0,'desc']]);
	$display->columns([
		Column::string('name')->label('Name'),
		Column::string('lastname')->label('Last Name'),
		Column::string('email')->label('Email'),
		Column::count('link')->label('Links count'),
	]);
	return $display;
})->edit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('name', 'Name')->required(),
		FormItem::text('email', 'Email')->required()->unique(),
	]);
	return $form;
})->delete(null);