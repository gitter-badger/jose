<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace SpomkyLabs\Jose\Algorithm\KeyEncryption;

use phpseclib\Crypt\RSA as PHPSecLibRSA;

/**
 * Class RSAOAEP256.
 */
class RSAOAEP256 extends RSA
{
    /**
     * @return int
     */
    public function getEncryptionMode()
    {
        return PHPSecLibRSA::ENCRYPTION_OAEP;
    }

    /**
     * @return string
     */
    public function getHashAlgorithm()
    {
        return 'sha256';
    }

    /**
     * @return string
     */
    public function getAlgorithmName()
    {
        return 'RSA-OAEP-256';
    }
}
