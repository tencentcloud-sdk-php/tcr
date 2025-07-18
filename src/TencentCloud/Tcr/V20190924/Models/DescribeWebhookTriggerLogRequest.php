<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWebhookTriggerLog请求参数结构体
 *
 * @method string getRegistryId() 获取实例 Id
 * @method void setRegistryId(string $RegistryId) 设置实例 Id
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method integer getId() 获取触发器 Id
 * @method void setId(integer $Id) 设置触发器 Id
 * @method integer getLimit() 获取分页单页数量
 * @method void setLimit(integer $Limit) 设置分页单页数量
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 */
class DescribeWebhookTriggerLogRequest extends AbstractModel
{
    /**
     * @var string 实例 Id
     */
    public $RegistryId;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var integer 触发器 Id
     */
    public $Id;

    /**
     * @var integer 分页单页数量
     */
    public $Limit;

    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @param string $RegistryId 实例 Id
     * @param string $Namespace 命名空间
     * @param integer $Id 触发器 Id
     * @param integer $Limit 分页单页数量
     * @param integer $Offset 分页偏移量
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
