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
 * DescribeInternalEndpoints返回参数结构体
 *
 * @method array getAccessVpcSet() 获取内网接入信息的列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessVpcSet(array $AccessVpcSet) 设置内网接入信息的列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取内网接入总数
 * @method void setTotalCount(integer $TotalCount) 设置内网接入总数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInternalEndpointsResponse extends AbstractModel
{
    /**
     * @var array 内网接入信息的列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessVpcSet;

    /**
     * @var integer 内网接入总数
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $AccessVpcSet 内网接入信息的列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 内网接入总数
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AccessVpcSet",$param) and $param["AccessVpcSet"] !== null) {
            $this->AccessVpcSet = [];
            foreach ($param["AccessVpcSet"] as $key => $value){
                $obj = new AccessVpc();
                $obj->deserialize($value);
                array_push($this->AccessVpcSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
