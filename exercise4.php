<?php

/**
 * INSTRUCTIONS:
 * Create a class named Article with the following properties:
 * title
 * content
 * Implement a method getSummary($maxLength) that returns the first $maxLength
 * characters of the content, followed by "…" if the content is longer than $maxLength.
 */
class Article
{
    private string $title;
    private string $content;

    public function __construct(string $title, string $content)
    {
        $this->setTitle($title);
        $this->setContent($content);
    }

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getSummary(int $maxLength): string
    {
        if (strlen($this->content) <= $maxLength) {
            return $this->content;
        }
        return substr($this->content, 0, $maxLength) . '...';
    }
}

$article1 = new Article("Technology", "Read the latest technology news on SciTechDaily, your comprehensive source for the latest breakthroughs, trends, and innovations shaping the world of technology. We bring you up-to-date insights on a wide array of topics, from cutting-edge advancements in artificial intelligence and robotics to the latest in green technologies, telecommunications, and more.

Our expertly curated content showcases the pioneering minds, revolutionary ideas, and transformative solutions that are driving the future of technology and its impact on our daily lives. Stay informed about the rapid evolution of the tech landscape, and join us as we explore the endless possibilities of the digital age.");

?>
<h1><?= $article1->getTitle() ?> </h1><?= $article1->getSummary(20); ?>