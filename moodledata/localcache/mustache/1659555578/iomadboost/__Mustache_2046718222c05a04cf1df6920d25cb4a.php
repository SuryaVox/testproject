<?php

class __Mustache_2046718222c05a04cf1df6920d25cb4a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="row m-t-2 p-2 border border-secondary rounded">
';
        // 'companyselect.onecompany' section
        $value = $context->findDot('companyselect.onecompany');
        $buffer .= $this->sectionE173d2e74c17a91f99428db605f8793c($context, $indent, $value);
        // 'companyselect.onecompany' inverted section
        $value = $context->findDot('companyselect.onecompany');
        if (empty($value)) {
            
            $buffer .= $indent . '       <div class="col-lg-6 col-md-12">
';
            $buffer .= $indent . '           ';
            $value = $this->resolveValue($context->findDot('companyselect.selectform'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '       </div>
';
            $buffer .= $indent . '       <div class="col-lg-6 col-md-12">
';
            $buffer .= $indent . '           ';
            $value = $this->resolveValue($context->findDot('companyselect.suspended'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '       </div>
';
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="m-t-2 iomad_company_admin ">
';
        if ($partial = $this->mustache->loadPartial('block_iomad_company_admin/tabs')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <div class="tab-content mt-3" id="iomadDashboardTabContent">
';
        // 'panes' section
        $value = $context->find('panes');
        $buffer .= $this->sectionB808ba7de95c56e1ab1beb3fe95ddb92($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionAccee019678dbd0e99d8b5652c13a72f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'currentcompany, block_iomad_company_admin,{{ companyselect.companyname }}';
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
                
                $buffer .= 'currentcompany, block_iomad_company_admin,';
                $value = $this->resolveValue($context->findDot('companyselect.companyname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE173d2e74c17a91f99428db605f8793c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
       <div class="alert alert-info">
           {{#str }}currentcompany, block_iomad_company_admin,{{ companyselect.companyname }}{{/str }}
       </div>
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
                
                $buffer .= $indent . '       <div class="alert alert-info">
';
                $buffer .= $indent . '           ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAccee019678dbd0e99d8b5652c13a72f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '       </div>
';
                $context->pop();
            }
        }
    
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

    private function sectionB808ba7de95c56e1ab1beb3fe95ddb92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="tab-pane {{# selected }}active{{/ selected }} iomadlink_container" id="{{ category }}" role="tabpanel">
                {{> block_iomad_company_admin/menuitem }}
                <div class="clearfix"></div>
            </div>
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
                
                $buffer .= $indent . '            <div class="tab-pane ';
                // 'selected' section
                $value = $context->find('selected');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= ' iomadlink_container" id="';
                $value = $this->resolveValue($context->find('category'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" role="tabpanel">
';
                if ($partial = $this->mustache->loadPartial('block_iomad_company_admin/menuitem')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '                <div class="clearfix"></div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
