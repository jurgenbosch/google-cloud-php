<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/write.proto

namespace GPBMetadata\Google\Firestore\V1Beta1;

class Write
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Firestore\V1Beta1\Common::initOnce();
        \GPBMetadata\Google\Firestore\V1Beta1\Document::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9d0e0a24676f6f676c652f6669726573746f72652f763162657461312f" .
            "77726974652e70726f746f1218676f6f676c652e6669726573746f72652e" .
            "763162657461311a27676f6f676c652f6669726573746f72652f76316265" .
            "7461312f646f63756d656e742e70726f746f1a1f676f6f676c652f70726f" .
            "746f6275662f74696d657374616d702e70726f746f1a1c676f6f676c652f" .
            "6170692f616e6e6f746174696f6e732e70726f746f229d020a0557726974" .
            "6512340a0675706461746518012001280b32222e676f6f676c652e666972" .
            "6573746f72652e763162657461312e446f63756d656e74480012100a0664" .
            "656c657465180220012809480012400a097472616e73666f726d18062001" .
            "280b322b2e676f6f676c652e6669726573746f72652e763162657461312e" .
            "446f63756d656e745472616e73666f726d4800123b0a0b7570646174655f" .
            "6d61736b18032001280b32262e676f6f676c652e6669726573746f72652e" .
            "763162657461312e446f63756d656e744d61736b12400a1063757272656e" .
            "745f646f63756d656e7418042001280b32262e676f6f676c652e66697265" .
            "73746f72652e763162657461312e507265636f6e646974696f6e420b0a09" .
            "6f7065726174696f6e2288050a11446f63756d656e745472616e73666f72" .
            "6d12100a08646f63756d656e7418012001280912540a106669656c645f74" .
            "72616e73666f726d7318022003280b323a2e676f6f676c652e6669726573" .
            "746f72652e763162657461312e446f63756d656e745472616e73666f726d" .
            "2e4669656c645472616e73666f726d1a8a040a0e4669656c645472616e73" .
            "666f726d12120a0a6669656c645f7061746818012001280912650a137365" .
            "745f746f5f7365727665725f76616c756518022001280e32462e676f6f67" .
            "6c652e6669726573746f72652e763162657461312e446f63756d656e7454" .
            "72616e73666f726d2e4669656c645472616e73666f726d2e536572766572" .
            "56616c7565480012340a09696e6372656d656e7418032001280b321f2e67" .
            "6f6f676c652e6669726573746f72652e763162657461312e56616c756548" .
            "0012320a076d6178696d756d18042001280b321f2e676f6f676c652e6669" .
            "726573746f72652e763162657461312e56616c7565480012320a076d696e" .
            "696d756d18052001280b321f2e676f6f676c652e6669726573746f72652e" .
            "763162657461312e56616c7565480012470a17617070656e645f6d697373" .
            "696e675f656c656d656e747318062001280b32242e676f6f676c652e6669" .
            "726573746f72652e763162657461312e417272617956616c756548001245" .
            "0a1572656d6f76655f616c6c5f66726f6d5f617272617918072001280b32" .
            "242e676f6f676c652e6669726573746f72652e763162657461312e417272" .
            "617956616c75654800223d0a0b53657276657256616c7565121c0a185345" .
            "525645525f56414c55455f554e535045434946494544100012100a0c5245" .
            "51554553545f54494d45100142100a0e7472616e73666f726d5f74797065" .
            "227a0a0b5772697465526573756c74122f0a0b7570646174655f74696d65" .
            "18012001280b321a2e676f6f676c652e70726f746f6275662e54696d6573" .
            "74616d70123a0a117472616e73666f726d5f726573756c74731802200328" .
            "0b321f2e676f6f676c652e6669726573746f72652e763162657461312e56" .
            "616c756522760a0e446f63756d656e744368616e676512340a08646f6375" .
            "6d656e7418012001280b32222e676f6f676c652e6669726573746f72652e" .
            "763162657461312e446f63756d656e7412120a0a7461726765745f696473" .
            "180520032805121a0a1272656d6f7665645f7461726765745f6964731806" .
            "20032805226d0a0e446f63756d656e7444656c65746512100a08646f6375" .
            "6d656e74180120012809121a0a1272656d6f7665645f7461726765745f69" .
            "6473180620032805122d0a09726561645f74696d6518042001280b321a2e" .
            "676f6f676c652e70726f746f6275662e54696d657374616d70226d0a0e44" .
            "6f63756d656e7452656d6f766512100a08646f63756d656e741801200128" .
            "09121a0a1272656d6f7665645f7461726765745f69647318022003280512" .
            "2d0a09726561645f74696d6518042001280b321a2e676f6f676c652e7072" .
            "6f746f6275662e54696d657374616d7022330a0f4578697374656e636546" .
            "696c74657212110a097461726765745f6964180120012805120d0a05636f" .
            "756e7418022001280542b8010a1c636f6d2e676f6f676c652e6669726573" .
            "746f72652e76316265746131420a577269746550726f746f50015a41676f" .
            "6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c" .
            "65617069732f6669726573746f72652f763162657461313b666972657374" .
            "6f7265a2020447434653aa021e476f6f676c652e436c6f75642e46697265" .
            "73746f72652e56314265746131ca021e476f6f676c655c436c6f75645c46" .
            "69726573746f72655c56316265746131620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

