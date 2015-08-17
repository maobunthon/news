<?php class FluidCache_WE_News_Home_action_filter_fe5a3789bb0ec88728df3a6bd45c599604a3271c extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Title
 */
public function section_768e0c1c69573fb588f61f1308a015c11468e05f(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'Show By Category';
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '


	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
				<div class="carousel-caption">
					<h3>...</h3>
					<p>...</p>
				</div>
			</div>
			<div class="item">
				<img src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
				<div class="carousel-caption">
					<h3>...</h3>
					<p>...</p>
				</div>
			</div>
			<div class="item">
				<img src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
				<div class="carousel-caption">
					<h3>...</h3>
					<p>...</p>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<br>
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments1 = array();
$arguments1['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments1['as'] = 'myNews';
$arguments1['key'] = '';
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
		<hr>
		<div class="row">
			<div class="col-md-3" style="margin-bottom: 10px">
				<img width="100%" src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
			</div>
			<div class="col-md-9">
				<label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments4 = array();
$arguments4['action'] = 'detail';
$arguments4['controller'] = 'Home';
// Rendering Array
$array5 = array();
$array5['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews', $renderingContext);
$arguments4['arguments'] = $array5;
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['package'] = NULL;
$arguments4['subpackage'] = NULL;
$arguments4['section'] = '';
$arguments4['format'] = '';
$arguments4['additionalParams'] = array (
);
$arguments4['addQueryString'] = false;
$arguments4['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments4['useParentRequest'] = false;
$arguments4['absolute'] = true;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['name'] = NULL;
$arguments4['rel'] = NULL;
$arguments4['rev'] = NULL;
$arguments4['target'] = NULL;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.title', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = 'UTF-8';
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());
return !is_string($value9) && !(is_object($value9) && method_exists($value9, '__toString')) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments7['encoding'], $arguments7['doubleEncode']);
};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper10->setArguments($arguments4);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output3 .= $viewHelper10->initializeArgumentsAndRender();

$output3 .= '</label>
				<p>';
// Rendering ViewHelper WE\News\ViewHelpers\GetSubStringViewHelper
$arguments11 = array();
$arguments11['str'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.content', $renderingContext);
$arguments11['start'] = '0';
$arguments11['end'] = '190';
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'WE\News\ViewHelpers\GetSubStringViewHelper');
$viewHelper13->setArguments($arguments11);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper WE\News\ViewHelpers\GetSubStringViewHelper

$output3 .= $viewHelper13->initializeArgumentsAndRender();

$output3 .= '</p>
				<div class="row pull-right" style="padding-right: 15px;">
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments14 = array();
$arguments14['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.categories', $renderingContext);
$arguments14['as'] = 'category';
$arguments14['key'] = '';
$arguments14['reverse'] = false;
$arguments14['iteration'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
						<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments17 = array();
$arguments17['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext);
$arguments17['keepQuotes'] = false;
$arguments17['encoding'] = 'UTF-8';
$arguments17['doubleEncode'] = true;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$value19 = ($arguments17['value'] !== NULL ? $arguments17['value'] : $renderChildrenClosure18());

$output16 .= !is_string($value19) && !(is_object($value19) && method_exists($value19, '__toString')) ? $value19 : htmlspecialchars($value19, ($arguments17['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments17['encoding'], $arguments17['doubleEncode']);

$output16 .= '</span>
					';
return $output16;
};

$output3 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output3 .= '
				</div>
				<div class="row pull-left"  style="padding-left: 15px;">
					<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments20 = array();
$arguments20['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.user.name', $renderingContext);
$arguments20['keepQuotes'] = false;
$arguments20['encoding'] = 'UTF-8';
$arguments20['doubleEncode'] = true;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$value22 = ($arguments20['value'] !== NULL ? $arguments20['value'] : $renderChildrenClosure21());

$output3 .= !is_string($value22) && !(is_object($value22) && method_exists($value22, '__toString')) ? $value22 : htmlspecialchars($value22, ($arguments20['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments20['encoding'], $arguments20['doubleEncode']);

$output3 .= '</span>
				</div>
			</div>
		</div>
	';
return $output3;
};

$output0 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

	<hr>
';

return $output0;
}
/**
 * section Category
 */
public function section_a3c686e711e4720f99b4562bb3dbaae7ab658cf2(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output23 = '';

$output23 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments24 = array();
$arguments24['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategory', $renderingContext);
$arguments24['as'] = 'list';
$arguments24['key'] = '';
$arguments24['reverse'] = false;
$arguments24['iteration'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments27 = array();
$arguments27['action'] = 'filter';
$arguments27['controller'] = 'Home';
// Rendering Array
$array28 = array();
$array28['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'list.identity', $renderingContext);
$arguments27['arguments'] = $array28;
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['package'] = NULL;
$arguments27['subpackage'] = NULL;
$arguments27['section'] = '';
$arguments27['format'] = '';
$arguments27['additionalParams'] = array (
);
$arguments27['addQueryString'] = false;
$arguments27['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments27['useParentRequest'] = false;
$arguments27['absolute'] = true;
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$arguments27['name'] = NULL;
$arguments27['rel'] = NULL;
$arguments27['rev'] = NULL;
$arguments27['target'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'list.name', $renderingContext);
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = 'UTF-8';
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());
return !is_string($value32) && !(is_object($value32) && method_exists($value32, '__toString')) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments30['encoding'], $arguments30['doubleEncode']);
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper33->setArguments($arguments27);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output26 .= $viewHelper33->initializeArgumentsAndRender();

$output26 .= '
	';
return $output26;
};

$output23 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
';

return $output23;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output34 = '';

$output34 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments35 = array();
$arguments35['name'] = 'Default';
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper37->setArguments($arguments35);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output34 .= $viewHelper37->initializeArgumentsAndRender();

$output34 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments38 = array();
$arguments38['name'] = 'Title';
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return 'Show By Category';
};

$output34 .= '';

$output34 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments40 = array();
$arguments40['name'] = 'Content';
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '


	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
				<div class="carousel-caption">
					<h3>...</h3>
					<p>...</p>
				</div>
			</div>
			<div class="item">
				<img src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
				<div class="carousel-caption">
					<h3>...</h3>
					<p>...</p>
				</div>
			</div>
			<div class="item">
				<img src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
				<div class="carousel-caption">
					<h3>...</h3>
					<p>...</p>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<br>
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments43 = array();
$arguments43['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'news', $renderingContext);
$arguments43['as'] = 'myNews';
$arguments43['key'] = '';
$arguments43['reverse'] = false;
$arguments43['iteration'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
		<hr>
		<div class="row">
			<div class="col-md-3" style="margin-bottom: 10px">
				<img width="100%" src="http://www.web-essentials.asia/_Resources/Persistent/9ac10974895fa5a41f61c338a7884255e66cd8eb/T3CON15-Asia-01banner-no-title.jpg" alt="...">
			</div>
			<div class="col-md-9">
				<label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments46 = array();
$arguments46['action'] = 'detail';
$arguments46['controller'] = 'Home';
// Rendering Array
$array47 = array();
$array47['news'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews', $renderingContext);
$arguments46['arguments'] = $array47;
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
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
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments49 = array();
$arguments49['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.title', $renderingContext);
$arguments49['keepQuotes'] = false;
$arguments49['encoding'] = 'UTF-8';
$arguments49['doubleEncode'] = true;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$value51 = ($arguments49['value'] !== NULL ? $arguments49['value'] : $renderChildrenClosure50());
return !is_string($value51) && !(is_object($value51) && method_exists($value51, '__toString')) ? $value51 : htmlspecialchars($value51, ($arguments49['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments49['encoding'], $arguments49['doubleEncode']);
};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper52->setArguments($arguments46);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output45 .= $viewHelper52->initializeArgumentsAndRender();

$output45 .= '</label>
				<p>';
// Rendering ViewHelper WE\News\ViewHelpers\GetSubStringViewHelper
$arguments53 = array();
$arguments53['str'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.content', $renderingContext);
$arguments53['start'] = '0';
$arguments53['end'] = '190';
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'WE\News\ViewHelpers\GetSubStringViewHelper');
$viewHelper55->setArguments($arguments53);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper WE\News\ViewHelpers\GetSubStringViewHelper

$output45 .= $viewHelper55->initializeArgumentsAndRender();

$output45 .= '</p>
				<div class="row pull-right" style="padding-right: 15px;">
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments56 = array();
$arguments56['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.categories', $renderingContext);
$arguments56['as'] = 'category';
$arguments56['key'] = '';
$arguments56['reverse'] = false;
$arguments56['iteration'] = NULL;
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
						<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext);
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = 'UTF-8';
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());

$output58 .= !is_string($value61) && !(is_object($value61) && method_exists($value61, '__toString')) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments59['encoding'], $arguments59['doubleEncode']);

$output58 .= '</span>
					';
return $output58;
};

$output45 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output45 .= '
				</div>
				<div class="row pull-left"  style="padding-left: 15px;">
					<span class="label label-default">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments62 = array();
$arguments62['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'myNews.user.name', $renderingContext);
$arguments62['keepQuotes'] = false;
$arguments62['encoding'] = 'UTF-8';
$arguments62['doubleEncode'] = true;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$value64 = ($arguments62['value'] !== NULL ? $arguments62['value'] : $renderChildrenClosure63());

$output45 .= !is_string($value64) && !(is_object($value64) && method_exists($value64, '__toString')) ? $value64 : htmlspecialchars($value64, ($arguments62['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments62['encoding'], $arguments62['doubleEncode']);

$output45 .= '</span>
				</div>
			</div>
		</div>
	';
return $output45;
};

$output42 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '

	<hr>
';
return $output42;
};

$output34 .= '';

$output34 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments65 = array();
$arguments65['name'] = 'Category';
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments68 = array();
$arguments68['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategory', $renderingContext);
$arguments68['as'] = 'list';
$arguments68['key'] = '';
$arguments68['reverse'] = false;
$arguments68['iteration'] = NULL;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments71 = array();
$arguments71['action'] = 'filter';
$arguments71['controller'] = 'Home';
// Rendering Array
$array72 = array();
$array72['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'list.identity', $renderingContext);
$arguments71['arguments'] = $array72;
$arguments71['additionalAttributes'] = NULL;
$arguments71['data'] = NULL;
$arguments71['package'] = NULL;
$arguments71['subpackage'] = NULL;
$arguments71['section'] = '';
$arguments71['format'] = '';
$arguments71['additionalParams'] = array (
);
$arguments71['addQueryString'] = false;
$arguments71['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments71['useParentRequest'] = false;
$arguments71['absolute'] = true;
$arguments71['class'] = NULL;
$arguments71['dir'] = NULL;
$arguments71['id'] = NULL;
$arguments71['lang'] = NULL;
$arguments71['style'] = NULL;
$arguments71['title'] = NULL;
$arguments71['accesskey'] = NULL;
$arguments71['tabindex'] = NULL;
$arguments71['onclick'] = NULL;
$arguments71['name'] = NULL;
$arguments71['rel'] = NULL;
$arguments71['rev'] = NULL;
$arguments71['target'] = NULL;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments74 = array();
$arguments74['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'list.name', $renderingContext);
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = 'UTF-8';
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$value76 = ($arguments74['value'] !== NULL ? $arguments74['value'] : $renderChildrenClosure75());
return !is_string($value76) && !(is_object($value76) && method_exists($value76, '__toString')) ? $value76 : htmlspecialchars($value76, ($arguments74['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments74['encoding'], $arguments74['doubleEncode']);
};
$viewHelper77 = $self->getViewHelper('$viewHelper77', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper77->setArguments($arguments71);
$viewHelper77->setRenderingContext($renderingContext);
$viewHelper77->setRenderChildrenClosure($renderChildrenClosure73);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output70 .= $viewHelper77->initializeArgumentsAndRender();

$output70 .= '
	';
return $output70;
};

$output67 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
';
return $output67;
};

$output34 .= '';

$output34 .= '
';

return $output34;
}


}
#0             26881     