<?php namespace Neomerx\Cors\Contracts\Http;

/**
 * Copyright 2015 info@neomerx.com (www.neomerx.com)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * @package Neomerx\Cors
 */
interface ParsedUrlInterface
{
    /** Default value for port if not specified */
    public const DEFAULT_PORT = 80;

    /**
     * Get URL scheme.
     *
     * @return string|null
     */
    public function getScheme(): ?string;

    /**
     * Get URL host.
     *
     * @return string|null
     */
    public function getHost(): ?string;

    /**
     * Get URL port.
     *
     * @return int|null
     */
    public function getPort(): ?int;

    /**
     * Get URL string representation.
     *
     * @return string
     */
    public function getOrigin(): string;

    /**
     * If schemes are equal.
     *
     * @param ParsedUrlInterface $rhs
     *
     * @return bool
     */
    public function isSchemeEqual(ParsedUrlInterface $rhs): bool;

    /**
     * If hosts are equal.
     *
     * @param ParsedUrlInterface $rhs
     *
     * @return bool
     */
    public function isHostEqual(ParsedUrlInterface $rhs): bool;

    /**
     * If ports are equal.
     *
     * @param ParsedUrlInterface $rhs
     *
     * @return bool
     */
    public function isPortEqual(ParsedUrlInterface $rhs): bool;
}
