<?php

class __Mustache_2791d9912504f4e4bb31393da413606c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="completed-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-region="completed-view">
';
        // 'completedview.courses' section
        $value = $context->findDot('completedview.courses');
        $buffer .= $this->sectionFe4616ecc717dccee5e3b0105c504600($context, $indent, $value);
        // 'completedview.courses' inverted section
        $value = $context->findDot('completedview.courses');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="text-xs-center text-center m-t-3">
';
            $buffer .= $indent . '            <img class="empty-placeholder-image-lg"
';
            $buffer .= $indent . '                src="';
            $value = $this->resolveValue($context->find('nocourses'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"
';
            $buffer .= $indent . '                alt="';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionC4db55fdc4fb8a20db82a63cabfbe4ad($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '                role="presentation">
';
            $buffer .= $indent . '            <p class="text-muted m-t-1">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionC4db55fdc4fb8a20db82a63cabfbe4ad($context, $indent, $value);
            $buffer .= '</p>
';
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionC9515a7feca505e3a2df46d644f43c94($context, $indent, $value);

        return $buffer;
    }

    private function sectionAd1879a15f1a11a13e87c82def58a0ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{ url }}">{{ fullname }}</a>
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
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c1d1233fd16a75b64c15f9be2ce4a71(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria:courseprogress, block_mycourses';
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
                
                $buffer .= 'aria:courseprogress, block_mycourses';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97c4f4c58356bb5f532f21270a0da408(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'complete, block_mycourses';
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
                
                $buffer .= 'complete, block_mycourses';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEae39f17d64506abc0f4582948261e60(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' timecompleted, local_report_completion ';
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
                
                $buffer .= ' timecompleted, local_report_completion ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa85987b166d5da16d93dabc90548bf6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' timeexpires, local_report_completion ';
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
                
                $buffer .= ' timeexpires, local_report_completion ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFffad918c6ea6739c32fc981edcac460(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <strong>({{#str}} timeexpires, local_report_completion {{/str}}</strong> {{ timeexpires }})
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
                
                $buffer .= $indent . '                                            <strong>(';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionCa85987b166d5da16d93dabc90548bf6($context, $indent, $value);
                $buffer .= '</strong> ';
                $value = $this->resolveValue($context->find('timeexpires'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ')
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC6892767ae71cdcbf2e2f720216f3607(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' finalscore, block_mycourses,  {{ finalscore }}</strong> ';
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
                
                $buffer .= ' finalscore, block_mycourses,  ';
                $value = $this->resolveValue($context->find('finalscore'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</strong> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5834abeb117bf012b4edabfa6851d60d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <strong>{{#str}} finalscore, block_mycourses,  {{ finalscore }}</strong> {{/str}}
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
                
                $buffer .= $indent . '                                            <strong>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionC6892767ae71cdcbf2e2f720216f3607($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0ab5e04e72d1462a643644d79c01bf7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' result, block_mycourses,  {{ finalscore }}</strong> ';
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
                
                $buffer .= ' result, block_mycourses,  ';
                $value = $this->resolveValue($context->find('finalscore'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</strong> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6192089b1d39fda80cf4015d5cf235ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' downloadcert, block_mycourses ';
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
                
                $buffer .= ' downloadcert, block_mycourses ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7d031bed2a618b76352a66456d7b8c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class = "certificatediv">
                                        <b>{{#str}} downloadcert, block_mycourses {{/str}}: </b><a href="{{ certificateurl }}" title="{{ certificatename }}"><img src="{{ certificateimage }}" alt="{{ certificatename }}"></a></p>
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
                
                $buffer .= $indent . '                                    <div class = "certificatediv">
';
                $buffer .= $indent . '                                        <b>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6192089b1d39fda80cf4015d5cf235ac($context, $indent, $value);
                $buffer .= ': </b><a href="';
                $value = $this->resolveValue($context->find('certificateurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('certificatename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('certificateimage'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('certificatename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></a></p>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe4616ecc717dccee5e3b0105c504600(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="tab-content">
            <div class="tab-pane active " id="mycourses_completed_view">
                    <div class="mycourselisting">
                        <div class="courseimage">
                            <a href="{{ url }}"><img class="imgresponsive" src="{{ image }}" class="courseimage"></a>
                        </div>
                        <div class="mycoursedetails">
                            <div class="mycourseheading">
                                <h4 class="title">
                                    {{#visible}}
                                        <a href="{{ url }}">{{ fullname }}</a>
                                    {{/visible}}
                                    {{^visible}}
                                        {{ fullname }}
                                    {{/visible}}
                                </h4>
                            </div>
                            <div class="mycoursesummary">
                                {{ summary}}
                            </div>
                            <div class="finalresults">
                                <div class="ml-auto mt-auto w-50 p-t-1">
                                    <div class="progress bg-white border">
                                        <div class="progress-bar bar" role="progressbar" aria-valuenow="{{progress}}" style="width: {{progress}}%" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="small">
                                        <span class="sr-only">{{#str}}aria:courseprogress, block_mycourses{{/str}}</span>
                                        <strong>{{progress}}%</strong> {{#str}}complete, block_mycourses{{/str}}
                                        <strong>{{#str}} timecompleted, local_report_completion {{/str}}</strong> {{ timecompleted }}
                                        {{#timeexpires}}
                                            <strong>({{#str}} timeexpires, local_report_completion {{/str}}</strong> {{ timeexpires }})
                                        {{/timeexpires}}
                                        {{#hasgrade}}
                                            <strong>{{#str}} finalscore, block_mycourses,  {{ finalscore }}</strong> {{/str}}
                                        {{/hasgrade}}
                                        {{^hasgrade}}
                                            <strong>{{#str}} result, block_mycourses,  {{ finalscore }}</strong> {{/str}}
                                        {{/hasgrade}}
                                    </div>
                                </div>
                                {{#certificates}}
                                    <div class = "certificatediv">
                                        <b>{{#str}} downloadcert, block_mycourses {{/str}}: </b><a href="{{ certificateurl }}" title="{{ certificatename }}"><img src="{{ certificateimage }}" alt="{{ certificatename }}"></a></p>
                                    </div>
                                {{/certificates}}
                            </div>
                        </div>
                    </div>
            </div>
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
                
                $buffer .= $indent . '        <div class="tab-content">
';
                $buffer .= $indent . '            <div class="tab-pane active " id="mycourses_completed_view">
';
                $buffer .= $indent . '                    <div class="mycourselisting">
';
                $buffer .= $indent . '                        <div class="courseimage">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><img class="imgresponsive" src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="courseimage"></a>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="mycoursedetails">
';
                $buffer .= $indent . '                            <div class="mycourseheading">
';
                $buffer .= $indent . '                                <h4 class="title">
';
                // 'visible' section
                $value = $context->find('visible');
                $buffer .= $this->sectionAd1879a15f1a11a13e87c82def58a0ec($context, $indent, $value);
                // 'visible' inverted section
                $value = $context->find('visible');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                        ';
                    $value = $this->resolveValue($context->find('fullname'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '                                </h4>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="mycoursesummary">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="finalresults">
';
                $buffer .= $indent . '                                <div class="ml-auto mt-auto w-50 p-t-1">
';
                $buffer .= $indent . '                                    <div class="progress bg-white border">
';
                $buffer .= $indent . '                                        <div class="progress-bar bar" role="progressbar" aria-valuenow="';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" style="width: ';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '%" aria-valuemin="0" aria-valuemax="100"></div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="small">
';
                $buffer .= $indent . '                                        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0c1d1233fd16a75b64c15f9be2ce4a71($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        <strong>';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '%</strong> ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section97c4f4c58356bb5f532f21270a0da408($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        <strong>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEae39f17d64506abc0f4582948261e60($context, $indent, $value);
                $buffer .= '</strong> ';
                $value = $this->resolveValue($context->find('timecompleted'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                // 'timeexpires' section
                $value = $context->find('timeexpires');
                $buffer .= $this->sectionFffad918c6ea6739c32fc981edcac460($context, $indent, $value);
                // 'hasgrade' section
                $value = $context->find('hasgrade');
                $buffer .= $this->section5834abeb117bf012b4edabfa6851d60d($context, $indent, $value);
                // 'hasgrade' inverted section
                $value = $context->find('hasgrade');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                            <strong>';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionA0ab5e04e72d1462a643644d79c01bf7($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                // 'certificates' section
                $value = $context->find('certificates');
                $buffer .= $this->sectionD7d031bed2a618b76352a66456d7b8c1($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4db55fdc4fb8a20db82a63cabfbe4ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nocompleted, block_mycourses ';
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
                
                $buffer .= ' nocompleted, block_mycourses ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9515a7feca505e3a2df46d644f43c94(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'core/custom_interaction_events\'], function($, customEvents) {
    var root = $(\'#completed-view-{{uniqid}}\');
    customEvents.define(root, [customEvents.events.activate]);
    root.on(customEvents.events.activate, \'[data-toggle="btns"] > .btn\', function() {
        root.find(\'.btn.active\').removeClass(\'active\');
    });
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
                
                $buffer .= $indent . 'require([\'jquery\', \'core/custom_interaction_events\'], function($, customEvents) {
';
                $buffer .= $indent . '    var root = $(\'#completed-view-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '    customEvents.define(root, [customEvents.events.activate]);
';
                $buffer .= $indent . '    root.on(customEvents.events.activate, \'[data-toggle="btns"] > .btn\', function() {
';
                $buffer .= $indent . '        root.find(\'.btn.active\').removeClass(\'active\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
