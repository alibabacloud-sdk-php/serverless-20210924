<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class PipelineTemplateSpec extends Model
{
    /**
     * @var Context
     */
    public $context;

    /**
     * @var mixed[]
     */
    public $contextSchema;

    /**
     * @var TaskExec[]
     */
    public $tasks;
    protected $_name = [
        'context'       => 'context',
        'contextSchema' => 'contextSchema',
        'tasks'         => 'tasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = null !== $this->context ? $this->context->toMap() : null;
        }
        if (null !== $this->contextSchema) {
            $res['contextSchema'] = $this->contextSchema;
        }
        if (null !== $this->tasks) {
            $res['tasks'] = [];
            if (null !== $this->tasks && \is_array($this->tasks)) {
                $n = 0;
                foreach ($this->tasks as $item) {
                    $res['tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PipelineTemplateSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['context'])) {
            $model->context = Context::fromMap($map['context']);
        }
        if (isset($map['contextSchema'])) {
            $model->contextSchema = $map['contextSchema'];
        }
        if (isset($map['tasks'])) {
            if (!empty($map['tasks'])) {
                $model->tasks = [];
                $n            = 0;
                foreach ($map['tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? TaskExec::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
