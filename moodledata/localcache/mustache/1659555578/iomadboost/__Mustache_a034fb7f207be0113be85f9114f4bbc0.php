<?php

class __Mustache_a034fb7f207be0113be85f9114f4bbc0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'items' section
        $value = $context->find('items');
        $buffer .= $this->section28e35e7def59781aa5684dc8543f6379($context, $indent, $value);

        return $buffer;
    }

    private function section28e35e7def59781aa5684dc8543f6379(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<a href="{{ url }}">
	    <div class="iomadlink mr-2">
	        <div class="iomadicon {{ style }}">
	        	<div class="fa fa-topic {{{ icon }}}"></div>
	            <div class="fa fa-action {{{ iconsmall }}}"></div>
	        </div>
	        <div class="actiondescription">{{ action }}</div>
	    </div>
	</a>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '	<a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '	    <div class="iomadlink mr-2">
';
                $buffer .= $indent . '	        <div class="iomadicon ';
                $value = $this->resolveValue($context->find('style'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '	        	<div class="fa fa-topic ';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= $value;
                $buffer .= '"></div>
';
                $buffer .= $indent . '	            <div class="fa fa-action ';
                $value = $this->resolveValue($context->find('iconsmall'), $context);
                $buffer .= $value;
                $buffer .= '"></div>
';
                $buffer .= $indent . '	        </div>
';
                $buffer .= $indent . '	        <div class="actiondescription">';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '	    </div>
';
                $buffer .= $indent . '	</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
