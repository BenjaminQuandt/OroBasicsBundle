<?php

declare(strict_types=1);

namespace EHDev\BasicsBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Oro\Bundle\OrganizationBundle\Entity\Organization;

/**
 * @deprecated This Trait is deprecated. Please use the Oro\Bundle\OrganizationBundle\Entity\Ownership\OrganizationAwareTrait instead!
 */
trait OrganizationOwnerTrait
{
    /**
     * @var Organization
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\OrganizationBundle\Entity\Organization")
     * @ORM\JoinColumn(name="organization_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $organization;

    /**
     * @param Organization $organization
     *
     * @return self
     */
    public function setOrganization(Organization $organization = null)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * @return Organization|null
     */
    public function getOrganization()
    {
        return $this->organization;
    }
}
