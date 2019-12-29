<?php

declare(strict_types=1);

namespace Shlinkio\Shlink\Core\Options;

use Shlinkio\Shlink\Common\Util\StringUtilsTrait;
use Zend\Stdlib\AbstractOptions;

use function sprintf;

class AppOptions extends AbstractOptions
{
    use StringUtilsTrait;

    private string $name = '';
    private string $version = '1.0';
    /** @deprecated */
    private string $secretKey = '';
    private ?string $disableTrackParam = null;

    public function getName(): string
    {
        return $this->name;
    }

    protected function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    protected function setVersion(string $version): self
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @deprecated
     */
    public function getSecretKey(): string
    {
        return $this->secretKey;
    }

    /**
     * @deprecated
     */
    protected function setSecretKey(string $secretKey): self
    {
        $this->secretKey = $secretKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDisableTrackParam(): ?string
    {
        return $this->disableTrackParam;
    }

    protected function setDisableTrackParam(?string $disableTrackParam): self
    {
        $this->disableTrackParam = $disableTrackParam;
        return $this;
    }

    public function __toString(): string
    {
        return sprintf('%s:v%s', $this->name, $this->version);
    }
}
