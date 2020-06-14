<?php
declare(strict_types = 1);
namespace App\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="article")
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
	 * @var int
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
	 * @var string
     */
    protected $title;
	/**
     * @ORM\Column(type="string", nullable=true)
	 * @var string
     */
    protected $content;

	/**
	 * Returns article ID.
	 *
	 * @return integer
	 */
    public function getId(): int {
        return $this->id;
    }

	/**
	 * Returns article title
	 *
	 * @return string
	 */
    public function getTitle(): string {
        return $this->title;
    }

	/**
	 * Sets article title.
	 *
	 * @param string $title
	 * @return void
	 */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

	/**
	 * Returns article content.
	 *
	 * @return string
	 */
	public function getContent(): string
    {
        return $this->content;
    }

	/**
	 * Sets article content.
	 *
	 * @param string $content
	 * @return void
	 */
    public function setContent(string $content)
    {
        $this->content = $content;
    }
}