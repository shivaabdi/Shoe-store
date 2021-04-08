<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Security\UserAuthenticator' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\EntryPoint\\AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Guard\\AuthenticatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Guard\\AbstractGuardAuthenticator.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Guard\\Authenticator\\AbstractFormLoginAuthenticator.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Util\\TargetPathTrait.php';
include_once $this->targetDirs[3].'\\src\\Security\\UserAuthenticator.php';

return $this->privates['App\Security\UserAuthenticator'] = new \App\Security\UserAuthenticator(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.csrf.token_manager'] ?? $this->load('getSecurity_Csrf_TokenManagerService.php')), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php')));
