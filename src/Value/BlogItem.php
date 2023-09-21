<?php
declare(strict_types=1);

namespace BlogWeb\Value;

class BlogItem
{
    private function __construct(
        private BlogMetaData $blogMetaData,
        private string       $blogTitle,
        private string       $blogText,
    )
    {
    }

    public static function from(BlogMetaData $blogMetaData, string $blogTitle, string $blogText): self
    {
        return new self($blogMetaData, $blogTitle, $blogText);
    }

    public function getBlogMetaData(): BlogMetaData
    {
        return $this->blogMetaData;
    }

    public function getBlogTitle(): string
    {
        return $this->blogTitle;
    }

    public function getBlogText(): string
    {
        return $this->blogText;
    }
}