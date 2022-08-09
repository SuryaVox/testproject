<?php

class __Mustache_2879ba5f89e8a6b0b53d0ca36280940f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="block-mycourses" data-region="mycourses">
';
        $buffer .= $indent . '    <ul class="nav nav-tabs" role="tablist">
';
        $buffer .= $indent . '        <li class="nav-item">
';
        $buffer .= $indent . '            <a class="nav-link ';
        // 'viewingavailable' section
        $value = $context->find('viewingavailable');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                      href="#mycourses_available_view"
';
        $buffer .= $indent . '                      role="tab"
';
        $buffer .= $indent . '                      data-toggle="tab"
';
        $buffer .= $indent . '                      aria-selected="';
        // 'viewingavailable' section
        $value = $context->find('viewingavailable');
        $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
        // 'viewingavailable' inverted section
        $value = $context->find('viewingavailable');
        if (empty($value)) {
            
            $buffer .= 'flase';
        }
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section601b46f20ad4e6bdf9483fb6e924326c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li class="nav-item">
';
        $buffer .= $indent . '            <a class="nav-link ';
        // 'viewinginprogress' section
        $value = $context->find('viewinginprogress');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                      href="#mycourses_inprogress_view"
';
        $buffer .= $indent . '                      role="tab"
';
        $buffer .= $indent . '                      data-toggle="tab"
';
        $buffer .= $indent . '                      aria-selected="';
        // 'viewinginprogress' section
        $value = $context->find('viewinginprogress');
        $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
        // 'viewinginprogress' inverted section
        $value = $context->find('viewinginprogress');
        if (empty($value)) {
            
            $buffer .= 'false';
        }
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB100fc002a36094af3cdb888313f2764($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li class="nav-item">
';
        $buffer .= $indent . '            <a class="nav-link ';
        // 'viewingcompleted' section
        $value = $context->find('viewingcompleted');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                      href="#mycourses_completed_view"
';
        $buffer .= $indent . '                      role="tab"
';
        $buffer .= $indent . '                      data-toggle="tab"
';
        $buffer .= $indent . '                      aria-selected="';
        // 'viewingcompleted' section
        $value = $context->find('viewingcompleted');
        $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
        // 'viewingcompleted' inverted section
        $value = $context->find('viewingcompleted');
        if (empty($value)) {
            
            $buffer .= 'false';
        }
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0810380b433941fb8cc4005bb73f9603($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '    <div class="tab-content content-centred">
';
        $buffer .= $indent . '        <div role="tabpanel" class="tab-pane ';
        // 'viewingavailable' section
        $value = $context->find('viewingavailable');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '" id="mycourses_available_view">
';
        if ($partial = $this->mustache->loadPartial('block_mycourses/available-view')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div role="tabpanel" class="tab-pane ';
        // 'viewinginprogress' section
        $value = $context->find('viewinginprogress');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '" id="mycourses_inprogress_view">
';
        if ($partial = $this->mustache->loadPartial('block_mycourses/inprogress-view')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div role="tabpanel" class="tab-pane ';
        // 'viewingcompleted' section
        $value = $context->find('viewingcompleted');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '" id="mycourses_completed_view">
';
        if ($partial = $this->mustache->loadPartial('block_mycourses/completed-view')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionC0328a3b1ccde64cc262fe0f5abbe845($context, $indent, $value);

        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
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
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
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
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section601b46f20ad4e6bdf9483fb6e924326c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' availableheader, block_mycourses ';
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
                
                $buffer .= ' availableheader, block_mycourses ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB100fc002a36094af3cdb888313f2764(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' inprogressheader, block_mycourses ';
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
                
                $buffer .= ' inprogressheader, block_mycourses ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0810380b433941fb8cc4005bb73f9603(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completedheader, block_mycourses ';
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
                
                $buffer .= ' completedheader, block_mycourses ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC0328a3b1ccde64cc262fe0f5abbe845(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'block_mycourses/tab_preferences\'], function($, TabPreferences) {
    var root = $(\'#block-mycourses-view-choices-{{uniqid}}\');
    TabPreferences.registerEventListeners(root);
});
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
                
                $buffer .= $indent . 'require([\'jquery\', \'block_mycourses/tab_preferences\'], function($, TabPreferences) {
';
                $buffer .= $indent . '    var root = $(\'#block-mycourses-view-choices-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '    TabPreferences.registerEventListeners(root);
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
