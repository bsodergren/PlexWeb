<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\VideoDetailsRepository;

#[ORM\Entity(repositoryClass: VideoDetailsRepository::class)]
class VideoDetails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $video_key = null;

    #[ORM\Column(length: 255)]
    private ?string $library = null;

    #[ORM\Column(length: 255)]
    private ?string $video_filename = null;

    #[ORM\Column(length: 255)]
    private ?string $video_path = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $artist = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $studio = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $genre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $subStudio = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $keyword = null;

    
    #[ORM\Column(type: Types::BIGINT)]
    private ?string $video_filesize = '0';

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $thumbnail = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getVideoKey(): ?string
    {
        return $this->video_key;
    }

    public function setVideoKey(string $video_key): static
    {
        $this->video_key = $video_key;

        return $this;
    }

    public function getLibrary(): ?string
    {
        return $this->library;
    }

    public function setLibrary(string $library): static
    {
        $this->library = $library;

        return $this;
    }
    public function getVideoFilename(): ?string
    {
        return $this->video_filename;
    }

    public function setVideoFilename(string $video_filename): static
    {
        $this->video_filename = $video_filename;

        return $this;
    }

    public function getVideoPath(): ?string
    {
        return $this->video_path;
    }

    public function setVideoPath(string $video_path): static
    {
        $this->video_path = $video_path;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getArtist(): ?string
    {
        return $this->artist;
    }

    public function setArtist(?string $artist): static
    {
        $this->artist = $artist;

        return $this;
    }

    public function getStudio(): ?string
    {
        return $this->studio;
    }

    public function setStudio(?string $studio): static
    {
        $this->studio = $studio;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(?string $genre): static
    {
        $this->genre = $genre;

        return $this;
    }

    public function getSubStudio(): ?string
    {
        return $this->subStudio;
    }

    public function setSubStudio(?string $subStudio): static
    {
        $this->subStudio = $subStudio;

        return $this;
    }

    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    public function setKeyword(?string $keyword): static
    {
        $this->keyword = $keyword;

        return $this;
    }

    public function getVideoFilesize(): ?string
    {
        return $this->video_filesize;
    }

    public function setVideoFilesize(?string $video_filesize): static
    {
        $this->video_filesize = $video_filesize;

        return $this;
    }

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    public function setThumbnail(?string $thumbnail): static
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }
}
