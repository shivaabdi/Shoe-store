<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistry.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/FormExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';

return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Form\\CategoriesType' => function () {
    return ($this->privates['App\Form\CategoriesType'] ?? $this->privates['App\Form\CategoriesType'] = new \App\Form\CategoriesType());
}, 'App\\Form\\MessagesType' => function () {
    return ($this->privates['App\Form\MessagesType'] ?? $this->privates['App\Form\MessagesType'] = new \App\Form\MessagesType());
}, 'App\\Form\\OrderDetailType' => function () {
    return ($this->privates['App\Form\OrderDetailType'] ?? $this->privates['App\Form\OrderDetailType'] = new \App\Form\OrderDetailType());
}, 'App\\Form\\OrdersType' => function () {
    return ($this->privates['App\Form\OrdersType'] ?? $this->privates['App\Form\OrdersType'] = new \App\Form\OrdersType());
}, 'App\\Form\\ProductType' => function () {
    return ($this->privates['App\Form\ProductType'] ?? $this->privates['App\Form\ProductType'] = new \App\Form\ProductType());
}, 'App\\Form\\ResimlerType' => function () {
    return ($this->privates['App\Form\ResimlerType'] ?? $this->privates['App\Form\ResimlerType'] = new \App\Form\ResimlerType());
}, 'App\\Form\\SettingType' => function () {
    return ($this->privates['App\Form\SettingType'] ?? $this->privates['App\Form\SettingType'] = new \App\Form\SettingType());
}, 'App\\Form\\ShopcartType' => function () {
    return ($this->privates['App\Form\ShopcartType'] ?? $this->privates['App\Form\ShopcartType'] = new \App\Form\ShopcartType());
}, 'App\\Form\\UserType' => function () {
    return ($this->privates['App\Form\UserType'] ?? $this->privates['App\Form\UserType'] = new \App\Form\UserType());
}, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
    return ($this->privates['form.type.entity'] ?? $this->load('getForm_Type_EntityService.php'));
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
    return ($this->privates['form.type.choice'] ?? $this->load('getForm_Type_ChoiceService.php'));
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
    return ($this->privates['form.type.form'] ?? $this->load('getForm_Type_FormService.php'));
})), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->load('getForm_TypeExtension_Form_HttpFoundationService.php'));
    yield 1 => ($this->privates['form.type_extension.form.validator'] ?? $this->load('getForm_TypeExtension_Form_ValidatorService.php'));
    yield 2 => ($this->privates['form.type_extension.upload.validator'] ?? $this->load('getForm_TypeExtension_Upload_ValidatorService.php'));
    yield 3 => ($this->privates['form.type_extension.csrf'] ?? $this->load('getForm_TypeExtension_CsrfService.php'));
    yield 4 => ($this->privates['form.type_extension.form.data_collector'] ?? $this->load('getForm_TypeExtension_Form_DataCollectorService.php'));
}, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? $this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension());
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? $this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension());
}, 1)), new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->load('getForm_TypeGuesser_ValidatorService.php'));
    yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->load('getForm_TypeGuesser_DoctrineService.php'));
}, 2))), ($this->privates['form.resolved_type_factory'] ?? $this->load('getForm_ResolvedTypeFactoryService.php')));
