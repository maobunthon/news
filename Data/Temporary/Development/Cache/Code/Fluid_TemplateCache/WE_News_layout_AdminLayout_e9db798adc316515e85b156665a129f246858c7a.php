<?php class FluidCache_WE_News_layout_AdminLayout_e9db798adc316515e85b156665a129f246858c7a extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['section'] = 'Title';
$arguments1['partial'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '</title>
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\BaseViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\Fluid\ViewHelpers\BaseViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\BaseViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '
	<link href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments7 = array();
$arguments7['path'] = 'css/bootstrap.min.css';
$arguments7['package'] = 'WE.News';
$arguments7['resource'] = NULL;
$arguments7['localize'] = true;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper9->initializeArgumentsAndRender();

$output0 .= '" rel="stylesheet">
	<link href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments10 = array();
$arguments10['path'] = 'css/round-about.css';
$arguments10['package'] = 'WE.News';
$arguments10['resource'] = NULL;
$arguments10['localize'] = true;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '" rel="stylesheet">
	<link href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments13 = array();
$arguments13['path'] = 'css/custom.css';
$arguments13['package'] = 'WE.News';
$arguments13['resource'] = NULL;
$arguments13['localize'] = true;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper15->initializeArgumentsAndRender();

$output0 .= '" rel="stylesheet">
	<link href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments16 = array();
$arguments16['path'] = 'css/font-awesome.min.css';
$arguments16['package'] = 'WE.News';
$arguments16['resource'] = NULL;
$arguments16['localize'] = true;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper18->initializeArgumentsAndRender();

$output0 .= '" rel="stylesheet">
	<link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
	fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>
<nav class="navbar navbar-default navbar-fixed-top nav-custom">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Ant Dev</a>
	</div>
	<div id="navbar" class="navbar-collapse collapse menu-custom">
		<ul class="nav navbar-nav navbar-left">
			<!--<li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments19 = array();
$arguments19['action'] = 'index';
$arguments19['controller'] = 'blog';
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['package'] = NULL;
$arguments19['subpackage'] = NULL;
$arguments19['section'] = '';
$arguments19['format'] = '';
$arguments19['additionalParams'] = array (
);
$arguments19['addQueryString'] = false;
$arguments19['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments19['useParentRequest'] = false;
$arguments19['absolute'] = true;
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['name'] = NULL;
$arguments19['rel'] = NULL;
$arguments19['rev'] = NULL;
$arguments19['target'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return 'Blog';
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper21->initializeArgumentsAndRender();

$output0 .= '</li>-->
		</ul>
		<ul class="nav navbar-nav navbar-right" >
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper
$arguments22 = array();
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments25 = array();
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
					<li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments28 = array();
$arguments28['class'] = 'small';
$arguments28['action'] = 'logout';
$arguments28['controller'] = 'Login';
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['package'] = NULL;
$arguments28['subpackage'] = NULL;
$arguments28['section'] = '';
$arguments28['format'] = '';
$arguments28['additionalParams'] = array (
);
$arguments28['addQueryString'] = false;
$arguments28['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments28['useParentRequest'] = false;
$arguments28['absolute'] = true;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['name'] = NULL;
$arguments28['rel'] = NULL;
$arguments28['rev'] = NULL;
$arguments28['target'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return 'Logout';
};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper30->setArguments($arguments28);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output27 .= $viewHelper30->initializeArgumentsAndRender();

$output27 .= '</li>
					<li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments31 = array();
$arguments31['action'] = 'index';
$arguments31['controller'] = 'News';
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['package'] = NULL;
$arguments31['subpackage'] = NULL;
$arguments31['section'] = '';
$arguments31['format'] = '';
$arguments31['additionalParams'] = array (
);
$arguments31['addQueryString'] = false;
$arguments31['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments31['useParentRequest'] = false;
$arguments31['absolute'] = true;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['name'] = NULL;
$arguments31['rel'] = NULL;
$arguments31['rev'] = NULL;
$arguments31['target'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return 'Dashboard';
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper33->setArguments($arguments31);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output27 .= $viewHelper33->initializeArgumentsAndRender();

$output27 .= '</li>
				';
return $output27;
};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper34->setArguments($arguments25);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output24 .= $viewHelper34->initializeArgumentsAndRender();

$output24 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments35 = array();
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
					<li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments38 = array();
$arguments38['action'] = 'index';
$arguments38['controller'] = 'Login';
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['arguments'] = array (
);
$arguments38['package'] = NULL;
$arguments38['subpackage'] = NULL;
$arguments38['section'] = '';
$arguments38['format'] = '';
$arguments38['additionalParams'] = array (
);
$arguments38['addQueryString'] = false;
$arguments38['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments38['useParentRequest'] = false;
$arguments38['absolute'] = true;
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['name'] = NULL;
$arguments38['rel'] = NULL;
$arguments38['rev'] = NULL;
$arguments38['target'] = NULL;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return 'Login';
};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper40->setArguments($arguments38);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output37 .= $viewHelper40->initializeArgumentsAndRender();

$output37 .= '</li>
				';
return $output37;
};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper41->setArguments($arguments35);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output24 .= $viewHelper41->initializeArgumentsAndRender();

$output24 .= '
			';
return $output24;
};
$arguments22['__thenClosure'] = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
					<li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments43 = array();
$arguments43['class'] = 'small';
$arguments43['action'] = 'logout';
$arguments43['controller'] = 'Login';
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['arguments'] = array (
);
$arguments43['package'] = NULL;
$arguments43['subpackage'] = NULL;
$arguments43['section'] = '';
$arguments43['format'] = '';
$arguments43['additionalParams'] = array (
);
$arguments43['addQueryString'] = false;
$arguments43['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments43['useParentRequest'] = false;
$arguments43['absolute'] = true;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['name'] = NULL;
$arguments43['rel'] = NULL;
$arguments43['rev'] = NULL;
$arguments43['target'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return 'Logout';
};
$viewHelper45 = $self->getViewHelper('$viewHelper45', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper45->setArguments($arguments43);
$viewHelper45->setRenderingContext($renderingContext);
$viewHelper45->setRenderChildrenClosure($renderChildrenClosure44);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output42 .= $viewHelper45->initializeArgumentsAndRender();

$output42 .= '</li>
					<li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments46 = array();
$arguments46['action'] = 'index';
$arguments46['controller'] = 'News';
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['arguments'] = array (
);
$arguments46['package'] = NULL;
$arguments46['subpackage'] = NULL;
$arguments46['section'] = '';
$arguments46['format'] = '';
$arguments46['additionalParams'] = array (
);
$arguments46['addQueryString'] = false;
$arguments46['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments46['useParentRequest'] = false;
$arguments46['absolute'] = true;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['name'] = NULL;
$arguments46['rel'] = NULL;
$arguments46['rev'] = NULL;
$arguments46['target'] = NULL;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return 'Dashboard';
};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper48->setArguments($arguments46);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output42 .= $viewHelper48->initializeArgumentsAndRender();

$output42 .= '</li>
				';
return $output42;
};
$arguments22['__elseClosure'] = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
					<li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments50 = array();
$arguments50['action'] = 'index';
$arguments50['controller'] = 'Login';
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['arguments'] = array (
);
$arguments50['package'] = NULL;
$arguments50['subpackage'] = NULL;
$arguments50['section'] = '';
$arguments50['format'] = '';
$arguments50['additionalParams'] = array (
);
$arguments50['addQueryString'] = false;
$arguments50['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments50['useParentRequest'] = false;
$arguments50['absolute'] = true;
$arguments50['class'] = NULL;
$arguments50['dir'] = NULL;
$arguments50['id'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['title'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
$arguments50['name'] = NULL;
$arguments50['rel'] = NULL;
$arguments50['rev'] = NULL;
$arguments50['target'] = NULL;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return 'Login';
};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper52->setArguments($arguments50);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output49 .= $viewHelper52->initializeArgumentsAndRender();

$output49 .= '</li>
				';
return $output49;
};
$viewHelper53 = $self->getViewHelper('$viewHelper53', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper');
$viewHelper53->setArguments($arguments22);
$viewHelper53->setRenderingContext($renderingContext);
$viewHelper53->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper

$output0 .= $viewHelper53->initializeArgumentsAndRender();

$output0 .= '
		</ul>
	</div><!--/.nav-collapse -->
</nav>
<div class="container" >
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments54 = array();
$arguments54['section'] = 'Content';
$arguments54['partial'] = NULL;
$arguments54['arguments'] = array (
);
$arguments54['optional'] = false;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper56->setArguments($arguments54);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure55);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper56->initializeArgumentsAndRender();

$output0 .= '
</div>
<hr>
<footer class="text-center">
	<p>Web Essentials</p>
</footer>
<script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments57 = array();
$arguments57['path'] = 'js/jquery.min.js';
$arguments57['package'] = 'WE.News';
$arguments57['resource'] = NULL;
$arguments57['localize'] = true;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper59 = $self->getViewHelper('$viewHelper59', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper59->setArguments($arguments57);
$viewHelper59->setRenderingContext($renderingContext);
$viewHelper59->setRenderChildrenClosure($renderChildrenClosure58);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper59->initializeArgumentsAndRender();

$output0 .= '"></script>
<script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments60 = array();
$arguments60['path'] = 'js/bootstrap.min.js';
$arguments60['package'] = 'WE.News';
$arguments60['resource'] = NULL;
$arguments60['localize'] = true;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper62->setArguments($arguments60);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure61);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper62->initializeArgumentsAndRender();

$output0 .= '"></script>
</body>
</html>
';

return $output0;
}


}
#0             22028     