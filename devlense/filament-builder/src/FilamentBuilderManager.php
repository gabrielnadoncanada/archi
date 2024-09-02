<?php

namespace Devlense\FilamentBuilder;

use Closure;
use Illuminate\Support\Collection;

class FilamentBuilderManager
{
    const ID = 'filament-builder';

    protected Collection $blocks;

    protected Collection $sections;

    protected Collection $templates;

    protected array $schemaSlot = [];

    public function __construct()
    {
        $blocks = collect([]);
        $sections = collect([]);
        $templates = collect([]);

        $this->blocks = $blocks;
        $this->sections = $sections;
        $this->templates = $templates;
    }

    public function registerComponent(string $class, string $baseClass): void
    {
        match ($baseClass) {
            TemplateBuilder::class => static::registerTemplate($class),
            SectionBuilder::class => static::registerSection($class),
            BlockBuilder::class => static::registerBlock($class),
            default => throw new \Exception('Invalid class type'),
        };
    }

    public function registerTemplate(string $template): void
    {
        if (! is_subclass_of($template, TemplateBuilder::class)) {
            throw new \InvalidArgumentException("{$template} must extend ".TemplateBuilder::class);
        }

        $this->templates->put($template::getName(), $template);

    }

    public function registerSection(string $section): void
    {
        if (! is_subclass_of($section, SectionBuilder::class)) {
            throw new \InvalidArgumentException("{$section} must extend ".SectionBuilder::class);
        }

        $this->sections->put($section::getName(), $section);
    }

    public function registerBlock(string $block): void
    {
        if (! is_subclass_of($block, BlockBuilder::class)) {
            throw new \InvalidArgumentException("{$block} must extend ".BlockBuilder::class);
        }

        $this->blocks->put($block::getName(), $block);
    }

    public function registerSchemaSlot(string $name, array|Closure $schema): void
    {
        $this->schemaSlot[$name] = $schema;
    }

    public function getTemplateFromName(string $templateName): ?string
    {
        return $this->templates->get($templateName);
    }

    public function getSectionFromName(string $name): ?string
    {
        return $this->sections->get($name);
    }

    public function getBlockFromName(string $name): ?string
    {
        return $this->blocks->get($name);
    }

    public function getTemplates(): array
    {
        return $this->templates->map(fn ($template) => $template::getLabel())->toArray();
    }

    public function getDefaultTemplateName(): ?string
    {
        return $this->templates->keys()->first();
    }

    public function getSections(): array
    {
        return $this->sections->map(fn ($section) => $section::getSectionSchema())->toArray();
    }

    public function getSectionsRaw(): array
    {
        return $this->sections->toArray();
    }

    public function getSchemaSlot(string $name): array|Closure
    {
        return $this->schemaSlot[$name] ?? [];
    }
}
