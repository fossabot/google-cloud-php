<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace GPBMetadata\Google\Cloud\Speech\V1;

class CloudSpeech
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab2260a29676f6f676c652f636c6f75642f7370656563682f76312f636c" .
            "6f75645f7370656563682e70726f746f1216676f6f676c652e636c6f7564" .
            "2e7370656563682e76311a17676f6f676c652f6170692f636c69656e742e" .
            "70726f746f1a1f676f6f676c652f6170692f6669656c645f626568617669" .
            "6f722e70726f746f1a23676f6f676c652f6c6f6e6772756e6e696e672f6f" .
            "7065726174696f6e732e70726f746f1a19676f6f676c652f70726f746f62" .
            "75662f616e792e70726f746f1a1e676f6f676c652f70726f746f6275662f" .
            "6475726174696f6e2e70726f746f1a1f676f6f676c652f70726f746f6275" .
            "662f74696d657374616d702e70726f746f1a17676f6f676c652f7270632f" .
            "7374617475732e70726f746f2290010a105265636f676e697a6552657175" .
            "657374123e0a06636f6e66696718012001280b32292e676f6f676c652e63" .
            "6c6f75642e7370656563682e76312e5265636f676e6974696f6e436f6e66" .
            "69674203e04102123c0a05617564696f18022001280b32282e676f6f676c" .
            "652e636c6f75642e7370656563682e76312e5265636f676e6974696f6e41" .
            "7564696f4203e04102229b010a1b4c6f6e6752756e6e696e675265636f67" .
            "6e697a6552657175657374123e0a06636f6e66696718012001280b32292e" .
            "676f6f676c652e636c6f75642e7370656563682e76312e5265636f676e69" .
            "74696f6e436f6e6669674203e04102123c0a05617564696f18022001280b" .
            "32282e676f6f676c652e636c6f75642e7370656563682e76312e5265636f" .
            "676e6974696f6e417564696f4203e041022299010a1953747265616d696e" .
            "675265636f676e697a6552657175657374124e0a1073747265616d696e67" .
            "5f636f6e66696718012001280b32322e676f6f676c652e636c6f75642e73" .
            "70656563682e76312e53747265616d696e675265636f676e6974696f6e43" .
            "6f6e666967480012170a0d617564696f5f636f6e74656e7418022001280c" .
            "480042130a1173747265616d696e675f72657175657374228f010a1a5374" .
            "7265616d696e675265636f676e6974696f6e436f6e666967123e0a06636f" .
            "6e66696718012001280b32292e676f6f676c652e636c6f75642e73706565" .
            "63682e76312e5265636f676e6974696f6e436f6e6669674203e041021218" .
            "0a1073696e676c655f7574746572616e636518022001280812170a0f696e" .
            "746572696d5f726573756c747318032001280822df050a115265636f676e" .
            "6974696f6e436f6e66696712490a08656e636f64696e6718012001280e32" .
            "372e676f6f676c652e636c6f75642e7370656563682e76312e5265636f67" .
            "6e6974696f6e436f6e6669672e417564696f456e636f64696e6712190a11" .
            "73616d706c655f726174655f686572747a180220012805121b0a13617564" .
            "696f5f6368616e6e656c5f636f756e74180720012805122f0a27656e6162" .
            "6c655f73657061726174655f7265636f676e6974696f6e5f7065725f6368" .
            "616e6e656c180c20012808121a0a0d6c616e67756167655f636f64651803" .
            "200128094203e0410212180a106d61785f616c7465726e61746976657318" .
            "042001280512180a1070726f66616e6974795f66696c7465721805200128" .
            "08123e0a0f7370656563685f636f6e746578747318062003280b32252e67" .
            "6f6f676c652e636c6f75642e7370656563682e76312e537065656368436f" .
            "6e7465787412200a18656e61626c655f776f72645f74696d655f6f666673" .
            "65747318082001280812240a1c656e61626c655f6175746f6d617469635f" .
            "70756e6374756174696f6e180b20012808124c0a1264696172697a617469" .
            "6f6e5f636f6e66696718132001280b32302e676f6f676c652e636c6f7564" .
            "2e7370656563682e76312e537065616b657244696172697a6174696f6e43" .
            "6f6e666967123d0a086d6574616461746118092001280b322b2e676f6f67" .
            "6c652e636c6f75642e7370656563682e76312e5265636f676e6974696f6e" .
            "4d65746164617461120d0a056d6f64656c180d2001280912140a0c757365" .
            "5f656e68616e636564180e20012808228b010a0d417564696f456e636f64" .
            "696e6712180a14454e434f44494e475f554e535045434946494544100012" .
            "0c0a084c494e4541523136100112080a04464c4143100212090a054d554c" .
            "4157100312070a03414d521004120a0a06414d525f57421005120c0a084f" .
            "47475f4f5055531006121a0a1653504545585f574954485f484541444552" .
            "5f425954451007228e010a18537065616b657244696172697a6174696f6e" .
            "436f6e66696712220a1a656e61626c655f737065616b65725f6469617269" .
            "7a6174696f6e18012001280812190a116d696e5f737065616b65725f636f" .
            "756e7418022001280512190a116d61785f737065616b65725f636f756e74" .
            "18032001280512180a0b737065616b65725f7461671805200128054203e0" .
            "410322a0080a135265636f676e6974696f6e4d6574616461746112550a10" .
            "696e746572616374696f6e5f7479706518012001280e323b2e676f6f676c" .
            "652e636c6f75642e7370656563682e76312e5265636f676e6974696f6e4d" .
            "657461646174612e496e746572616374696f6e5479706512240a1c696e64" .
            "75737472795f6e616963735f636f64655f6f665f617564696f1803200128" .
            "0d125b0a136d6963726f70686f6e655f64697374616e636518042001280e" .
            "323e2e676f6f676c652e636c6f75642e7370656563682e76312e5265636f" .
            "676e6974696f6e4d657461646174612e4d6963726f70686f6e6544697374" .
            "616e6365125a0a136f726967696e616c5f6d656469615f74797065180520" .
            "01280e323d2e676f6f676c652e636c6f75642e7370656563682e76312e52" .
            "65636f676e6974696f6e4d657461646174612e4f726967696e616c4d6564" .
            "696154797065125e0a157265636f7264696e675f6465766963655f747970" .
            "6518062001280e323f2e676f6f676c652e636c6f75642e7370656563682e" .
            "76312e5265636f676e6974696f6e4d657461646174612e5265636f726469" .
            "6e6744657669636554797065121d0a157265636f7264696e675f64657669" .
            "63655f6e616d65180720012809121a0a126f726967696e616c5f6d696d65" .
            "5f7479706518082001280912130a0b617564696f5f746f706963180a2001" .
            "280922c5010a0f496e746572616374696f6e5479706512200a1c494e5445" .
            "52414354494f4e5f545950455f554e5350454349464945441000120e0a0a" .
            "44495343555353494f4e100112100a0c50524553454e544154494f4e1002" .
            "120e0a0a50484f4e455f43414c4c1003120d0a09564f4943454d41494c10" .
            "04121b0a1750524f46455353494f4e414c4c595f50524f44554345441005" .
            "12100a0c564f4943455f534541524348100612110a0d564f4943455f434f" .
            "4d4d414e441007120d0a09444943544154494f4e100822640a124d696372" .
            "6f70686f6e6544697374616e636512230a1f4d4943524f50484f4e455f44" .
            "495354414e43455f554e5350454349464945441000120d0a094e45415246" .
            "49454c441001120c0a084d49444649454c441002120c0a08464152464945" .
            "4c441003224e0a114f726967696e616c4d656469615479706512230a1f4f" .
            "524947494e414c5f4d454449415f545950455f554e535045434946494544" .
            "100012090a05415544494f100112090a05564944454f100222a4010a1352" .
            "65636f7264696e674465766963655479706512250a215245434f5244494e" .
            "475f4445564943455f545950455f554e5350454349464945441000120e0a" .
            "0a534d41525450484f4e45100112060a0250431002120e0a0a50484f4e45" .
            "5f4c494e451003120b0a0756454849434c45100412180a144f544845525f" .
            "4f5554444f4f525f444556494345100512170a134f544845525f494e444f" .
            "4f525f444556494345100622200a0d537065656368436f6e74657874120f" .
            "0a077068726173657318012003280922440a105265636f676e6974696f6e" .
            "417564696f12110a07636f6e74656e7418012001280c4800120d0a037572" .
            "691802200128094800420e0a0c617564696f5f736f7572636522550a1152" .
            "65636f676e697a65526573706f6e736512400a07726573756c7473180220" .
            "03280b322f2e676f6f676c652e636c6f75642e7370656563682e76312e53" .
            "70656563685265636f676e6974696f6e526573756c7422600a1c4c6f6e67" .
            "52756e6e696e675265636f676e697a65526573706f6e736512400a077265" .
            "73756c747318022003280b322f2e676f6f676c652e636c6f75642e737065" .
            "6563682e76312e5370656563685265636f676e6974696f6e526573756c74" .
            "229e010a1c4c6f6e6752756e6e696e675265636f676e697a654d65746164" .
            "61746112180a1070726f67726573735f70657263656e7418012001280512" .
            "2e0a0a73746172745f74696d6518022001280b321a2e676f6f676c652e70" .
            "726f746f6275662e54696d657374616d7012340a106c6173745f75706461" .
            "74655f74696d6518032001280b321a2e676f6f676c652e70726f746f6275" .
            "662e54696d657374616d7022b1020a1a53747265616d696e675265636f67" .
            "6e697a65526573706f6e736512210a056572726f7218012001280b32122e" .
            "676f6f676c652e7270632e53746174757312430a07726573756c74731802" .
            "2003280b32322e676f6f676c652e636c6f75642e7370656563682e76312e" .
            "53747265616d696e675265636f676e6974696f6e526573756c74125d0a11" .
            "7370656563685f6576656e745f7479706518042001280e32422e676f6f67" .
            "6c652e636c6f75642e7370656563682e76312e53747265616d696e675265" .
            "636f676e697a65526573706f6e73652e5370656563684576656e74547970" .
            "65224c0a0f5370656563684576656e7454797065121c0a18535045454348" .
            "5f4556454e545f554e5350454349464945441000121b0a17454e445f4f46" .
            "5f53494e474c455f5554544552414e4345100122f2010a1a53747265616d" .
            "696e675265636f676e6974696f6e526573756c74124a0a0c616c7465726e" .
            "61746976657318012003280b32342e676f6f676c652e636c6f75642e7370" .
            "656563682e76312e5370656563685265636f676e6974696f6e416c746572" .
            "6e617469766512100a0869735f66696e616c18022001280812110a097374" .
            "6162696c69747918032001280212320a0f726573756c745f656e645f7469" .
            "6d6518042001280b32192e676f6f676c652e70726f746f6275662e447572" .
            "6174696f6e12130a0b6368616e6e656c5f746167180520012805121a0a0d" .
            "6c616e67756167655f636f64651806200128094203e04103227a0a175370" .
            "656563685265636f676e6974696f6e526573756c74124a0a0c616c746572" .
            "6e61746976657318012003280b32342e676f6f676c652e636c6f75642e73" .
            "70656563682e76312e5370656563685265636f676e6974696f6e416c7465" .
            "726e617469766512130a0b6368616e6e656c5f7461671802200128052277" .
            "0a1c5370656563685265636f676e6974696f6e416c7465726e6174697665" .
            "12120a0a7472616e73637269707418012001280912120a0a636f6e666964" .
            "656e6365180220012802122f0a05776f72647318032003280b32202e676f" .
            "6f676c652e636c6f75642e7370656563682e76312e576f7264496e666f22" .
            "740a08576f7264496e666f122d0a0a73746172745f74696d651801200128" .
            "0b32192e676f6f676c652e70726f746f6275662e4475726174696f6e122b" .
            "0a08656e645f74696d6518022001280b32192e676f6f676c652e70726f74" .
            "6f6275662e4475726174696f6e120c0a04776f726418032001280932d104" .
            "0a065370656563681290010a095265636f676e697a6512282e676f6f676c" .
            "652e636c6f75642e7370656563682e76312e5265636f676e697a65526571" .
            "756573741a292e676f6f676c652e636c6f75642e7370656563682e76312e" .
            "5265636f676e697a65526573706f6e7365222e82d3e493021922142f7631" .
            "2f7370656563683a7265636f676e697a653a012ada410c636f6e6669672c" .
            "617564696f12e4010a144c6f6e6752756e6e696e675265636f676e697a65" .
            "12332e676f6f676c652e636c6f75642e7370656563682e76312e4c6f6e67" .
            "52756e6e696e675265636f676e697a65526571756573741a1d2e676f6f67" .
            "6c652e6c6f6e6772756e6e696e672e4f7065726174696f6e227882d3e493" .
            "0224221f2f76312f7370656563683a6c6f6e6772756e6e696e677265636f" .
            "676e697a653a012ada410c636f6e6669672c617564696fca413c0a1c4c6f" .
            "6e6752756e6e696e675265636f676e697a65526573706f6e7365121c4c6f" .
            "6e6752756e6e696e675265636f676e697a654d657461646174611281010a" .
            "1253747265616d696e675265636f676e697a6512312e676f6f676c652e63" .
            "6c6f75642e7370656563682e76312e53747265616d696e675265636f676e" .
            "697a65526571756573741a322e676f6f676c652e636c6f75642e73706565" .
            "63682e76312e53747265616d696e675265636f676e697a65526573706f6e" .
            "73652200280130011a49ca41157370656563682e676f6f676c6561706973" .
            "2e636f6dd2412e68747470733a2f2f7777772e676f6f676c65617069732e" .
            "636f6d2f617574682f636c6f75642d706c6174666f726d42720a1a636f6d" .
            "2e676f6f676c652e636c6f75642e7370656563682e7631420b5370656563" .
            "6850726f746f50015a3c676f6f676c652e676f6c616e672e6f72672f6765" .
            "6e70726f746f2f676f6f676c65617069732f636c6f75642f737065656368" .
            "2f76313b737065656368f80101a20203474353620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

