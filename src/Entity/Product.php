<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="Product")
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column(name="name", type="string", length=255)
	 */
	private $name;

	/**
	 * @ORM\Column(name="sku", type="string", length=20)
	 */
	private $sku;

	/**
	 * @ORM\Column(name="short_description", type="string", length=255)
	 */
	private $shortDescription;

	/**
	 * @ORM\Column(name="long_description", type="text", nullable=true)
	 */
	private $longDescription;

	/**
	 * @ORM\Column(name="active_start_date", type="date", nullable=true)
	 */
	private $activeStartDate;

	/**
	 * @ORM\Column(name="active_end_date", type="date", nullable=true)
	 */
	private $activeEndDate;

	/**
	 * @ORM\Column(name="manufacturer", type="string", length=255, nullable=true)
	 */
	private $manufacturer;

	/**
	 * @ORM\Column(name="created_at", type="datetime")
	 */
	private $createdAt;

	/**
	 * @ORM\Column(name="updated_at", type="datetime", nullable=true)
	 */
	private $updatedAt;

	/**
	 * @ORM\Column(name="is_download", type="boolean", nullable=false)
	 */
	private $isDownload;

	/**
	 * @ORM\Column(name="is_published", type="boolean", nullable=false)
	 */
	private $isPublished;

	/**
	 * @ORM\Column(name="meta_title", type="string", length=255, nullable=true)
	 */
	private $metaTitle;

	/**
	 * @ORM\Column(name="meta_description", type="string", length=255, nullable=true)
	 */
	private $metaDescription;

	/**
	 * @ORM\Column(name="canonical_url", type="string", length=255, nullable=false)
	 */
	private $canonicalUrl;

	/**
	 * @ORM\Column(name="is_promoted", type="boolean", nullable=false)
	 */
	private $isPromoted;

	/**
	 * Product constructor.
	 */
	public function __construct()
	{
		$this->createdAt = new \DateTime();
	}

	/**
	 * @return int|null
	 */
	public function getId(): ?int
	{
		return $this->id;
	}

	/**
	 * @return string|null
	 */
	public function getName(): ?string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 *
	 * @return $this
	 */
	public function setName(string $name): self
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getSku(): ?string
	{
		return $this->sku;
	}

	/**
	 * @param string $sku
	 *
	 * @return $this
	 */
	public function setSku(string $sku): self
	{
		$this->sku = $sku;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getShortDescription(): ?string
	{
		return $this->shortDescription;
	}

	/**
	 * @param string $shortDescription
	 *
	 * @return $this
	 */
	public function setShortDescription(string $shortDescription): self
	{
		$this->shortDescription = $shortDescription;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getLongDescription(): ?string
	{
		return $this->longDescription;
	}

	/**
	 * @param string|null $longDescription
	 *
	 * @return $this
	 */
	public function setLongDescription(?string $longDescription): self
	{
		$this->longDescription = $longDescription;

		return $this;
	}

	/**
	 * @return \DateTimeInterface|null
	 */
	public function getActiveStartDate(): ?\DateTimeInterface
	{
		return $this->activeStartDate;
	}

	/**
	 * @param \DateTimeInterface|null $activeStartDate
	 *
	 * @return $this
	 */
	public function setActiveStartDate(?\DateTimeInterface $activeStartDate): self
	{
		$this->activeStartDate = $activeStartDate;

		return $this;
	}

	/**
	 * @return \DateTimeInterface|null
	 */
	public function getActiveEndDate(): ?\DateTimeInterface
	{
		return $this->activeEndDate;
	}

	/**
	 * @param \DateTimeInterface|null $activeEndDate
	 *
	 * @return $this
	 */
	public function setActiveEndDate(?\DateTimeInterface $activeEndDate): self
	{
		$this->activeEndDate = $activeEndDate;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getManufacturer(): ?string
	{
		return $this->manufacturer;
	}

	/**
	 * @param string|null $manufacturer
	 *
	 * @return $this
	 */
	public function setManufacturer(?string $manufacturer): self
	{
		$this->manufacturer = $manufacturer;

		return $this;
	}

	/**
	 * @return \DateTimeInterface|null
	 */
	public function getCreatedAt(): ?\DateTimeInterface
	{
		return $this->createdAt;
	}

	/**
	 * @param \DateTimeInterface $createdAt
	 *
	 * @return $this
	 */
	public function setCreatedAt(\DateTimeInterface $createdAt): self
	{
		$this->createdAt = $createdAt;

		return $this;
	}

	/**
	 * @return \DateTimeInterface|null
	 */
	public function getUpdatedAt(): ?\DateTimeInterface
	{
		return $this->updatedAt;
	}

	/**
	 * @param \DateTimeInterface|null $updatedAt
	 *
	 * @return $this
	 */
	public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
	{
		$this->updatedAt = $updatedAt;

		return $this;
	}

	/**
	 * @return bool|null
	 */
	public function getIsDownload(): ?bool
	{
		return $this->isDownload;
	}

	/**
	 * @param bool $isDownload
	 *
	 * @return $this
	 */
	public function setIsDownload(bool $isDownload): self
	{
		$this->isDownload = $isDownload;

		return $this;
	}

	/**
	 * @return bool|null
	 */
	public function getIsPublished(): ?bool
	{
		return $this->isPublished;
	}

	/**
	 * @param bool $isPublished
	 *
	 * @return $this
	 */
	public function setIsPublished(bool $isPublished): self
	{
		$this->isPublished = $isPublished;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getMetaTitle(): ?string
	{
		return $this->metaTitle;
	}

	/**
	 * @param string $metaTitle
	 *
	 * @return $this
	 */
	public function setMetaTitle(string $metaTitle): self
	{
		$this->metaTitle = $metaTitle;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getMetaDescription(): ?string
	{
		return $this->metaDescription;
	}

	/**
	 * @param string|null $metaDescription
	 *
	 * @return $this
	 */
	public function setMetaDescription(?string $metaDescription): self
	{
		$this->metaDescription = $metaDescription;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getCanonicalUrl(): ?string
	{
		return $this->canonicalUrl;
	}

	/**
	 * @param string $canonicalUrl
	 *
	 * @return $this
	 */
	public function setCanonicalUrl(string $canonicalUrl): self
	{
		$this->canonicalUrl = $canonicalUrl;

		return $this;
	}

	/**
	 * @return bool|null
	 */
	public function getIsPromoted(): ?bool
	{
		return $this->isPromoted;
	}

	/**
	 * @param $isPromoted
	 *
	 * @return $this
	 */
	public function setIsPromoted($isPromoted): self
	{
		$this->isPromoted = $isPromoted;

		return $this;
	}
}
