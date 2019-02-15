<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Security\LoginUserAuthenticator' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-guard\\AuthenticatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-guard\\AbstractGuardAuthenticator.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-guard\\Authenticator\\AbstractFormLoginAuthenticator.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-http\\Util\\TargetPathTrait.php';
include_once $this->targetDirs[3].'\\src\\Security\\LoginUserAuthenticator.php';

return $this->privates['App\Security\LoginUserAuthenticator'] = new \App\Security\LoginUserAuthenticator(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.csrf.token_manager'] ?? $this->load('getSecurity_Csrf_TokenManagerService.php')));
