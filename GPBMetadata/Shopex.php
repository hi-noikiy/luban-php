<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: shopex.proto

namespace GPBMetadata;

class Shopex
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a880e0a0c73686f7065782e70726f746f12056c7562616e226d0a074164" .
            "6472657373120c0a044e616d65180120012809120d0a0550686f6e651802" .
            "2001280912210a084c6f636174696f6e18032001280b320f2e6c7562616e" .
            "2e4c6f636174696f6e12100a08416464726573733118042001280912100a" .
            "08416464726573733218052001280922450a07436f6e74616374120c0a04" .
            "4e616d65180120012809121d0a0647656e64657218022001280e320d2e6c" .
            "7562616e2e47656e646572120d0a0550686f6e65180320012809225e0a08" .
            "4c6f636174696f6e12100a0850726f76696e6365180120012809120c0a04" .
            "4369747918022001280912100a0844697374726963741803200128091213" .
            "0a0b5375624469737472696374180420012809120b0a035a697018052001" .
            "280922bc020a07496e766f69636512250a044d6f646518012001280e3217" .
            "2e6c7562616e2e496e766f6963652e456e756d4d6f646512250a04547970" .
            "6518022001280e32172e6c7562616e2e496e766f6963652e456e756d5479" .
            "7065120f0a07636f6e74656e7418042001280912140a0c636f6d70616e79" .
            "5f6e616d6518052001280912170a0f636f6d70616e795f61646472657373" .
            "180620012809121b0a13726567697374726174696f6e5f6e756d62657218" .
            "072001280912100a0862616e6b6e616d6518082001280912130a0b62616e" .
            "6b6163636f756e7418092001280912150a0d636f6d70616e795f70686f6e" .
            "65180a20012809221f0a08456e756d4d6f6465120a0a064e4f524d414c10" .
            "0012070a03564154100122270a08456e756d54797065120e0a0a494e4449" .
            "56494455414c1000120b0a07434f4d50414e59100122b0010a054f726465" .
            "72120f0a074f72646572496418012001280912110a0950726f6475637449" .
            "64180220012809120c0a044e616d6518032001280912100a085175616e74" .
            "697479180420012809120d0a054361744964180520012809120d0a055072" .
            "69636518062001280112150a0d437573746f6d697a6174696f6e18072003" .
            "280912130a0b436f6e7369676e54696d65180a2001280512190a046d6574" .
            "61180b2003280b320b2e6c7562616e2e4d65746122230a044d657461120c" .
            "0a04436f6465180120012809120d0a0556616c756518032001280922ba01" .
            "0a075061796d656e74120f0a0754726164654964180120032809120e0a06" .
            "416d6f756e74180220012801120e0a064d6574686f64180320012809120f" .
            "0a074368616e6e656c180420012809120f0a075472616e73496418052001" .
            "280912290a0653746174757318062001280e32192e6c7562616e2e506179" .
            "6d656e742e456e756d53746174757322310a0a456e756d53746174757312" .
            "120a0e574149545f42555945525f5041591000120f0a0b5041595f535543" .
            "43455353100122e7030a055472616465120a0a024964180120012809120f" .
            "0a074275796572496418022001280912100a0853656c6c65724964180320" .
            "01280912220a0653746174757318042001280e32122e6c7562616e2e4f72" .
            "646572537461747573121b0a054f7264657218052003280b320c2e6c7562" .
            "616e2e4f72646572120d0a055072696365180620012801120f0a07506f73" .
            "7446656518072001280112130a0b446973636f756e744665651808200128" .
            "0112110a0941646a75737446656518092001280112120a0a46696e616c50" .
            "72696365180a2001280112240a0c427579657241646472657373180b2001" .
            "280b320e2e6c7562616e2e4164647265737312240a0c4275796572436f6e" .
            "74616374180c2001280b320e2e6c7562616e2e436f6e7461637412150a0d" .
            "446973636f756e74546f6b656e180d2001280912140a0c446973636f756e" .
            "744d656d6f180e2001280912110a095061796d656e744964180f20012809" .
            "121f0a07496e766f69636518102001280b320e2e6c7562616e2e496e766f" .
            "69636512140a0c42757965724d65737361676518112001280912120a0a43" .
            "726561746554696d65181220012805120f0a0750617954696d6518132001" .
            "2805120f0a07456e6454696d6518142001280512190a044d657461181520" .
            "03280b320b2e6c7562616e2e4d6574612a1e0a0647656e64657212080a04" .
            "4d414c451000120a0a0646454d414c4510012ace010a0b4f726465725374" .
            "6174757312170a1354524144455f4e4f5f4352454154455f504159100012" .
            "120a0e574149545f42555945525f5041591001121a0a16574149545f5345" .
            "4c4c45525f53454e445f474f4f44531002121c0a18574149545f42555945" .
            "525f434f4e4649524d5f474f4f4453100312160a1254524144455f425559" .
            "45525f5349474e4544100412120a0e54524144455f46494e495348454410" .
            "0512100a0c54524144455f434c4f5345441006121a0a1654524144455f43" .
            "4c4f5345445f42595f54414f42414f100742240a0f636e2e73686f706578" .
            "2e6c7562616eca021053686f7065785c4c7562616e5c536466620670726f" .
            "746f33"
        ));

        static::$is_initialized = true;
    }
}
