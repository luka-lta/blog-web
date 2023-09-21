<?php
declare(strict_types=1);

namespace BlogWeb\Value;

use DateTime;

class BlogMetaData
{
    private function __construct(
        private ?int     $blogId,
        private string   $blogAuthor,
        private string   $blogTopic,
        private DateTime $blogCreated,
    )
    {
    }

    public static function from(string $blogAuthor, string $blogTopic, DateTime $blogCreated): self
    {
        return new self(null, $blogAuthor, $blogTopic, $blogCreated);
    }

    public function getBlogId(): int
    {
        return $this->blogId;
    }

    public function getBlogAuthor(): string
    {
        return $this->blogAuthor;
    }

    public function getBlogTopic(): string
    {
        return $this->blogTopic;
    }

    public function getBlogCreated(): DateTime
    {
        return $this->blogCreated;
    }
}