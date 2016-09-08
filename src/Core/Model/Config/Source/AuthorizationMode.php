<?php
/**
 * Copyright 2016 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 *  http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */
namespace Amazon\Core\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class AuthorizationMode implements ArrayInterface
{
    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'synchronous', 'label' => __('Synchronous')],
            ['value' => 'asynchronous', 'label' => __('Asynchronous')],
            ['value' => 'synchronous_possible', 'label' => __('Synchronous if Possible')],
            ['value' => 'none', 'label' => __('None')],
        ];
    }
}