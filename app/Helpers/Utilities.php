<?php

use Illuminate\Support\Facades\Schema;

if (! function_exists('theme')) {
    function theme($key)
    {
        if (Schema::hasTable('settings')) {
            return app(App\Settings\ThemeSettings::class)->$key;
        } else {

            return null;
        }
    }
}

if (! function_exists('checked')) {
    function checked($value, $test)
    {
        return $value === $test ? 'checked' : '';
    }
}

if (! function_exists('selected')) {
    function selected($value, $test)
    {
        return $value === $test ? 'selected' : '';
    }
}

if (! function_exists('random_password')) {
    function random_password(): string
    {
        $random = str_shuffle('abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890!$%^&!$%^&');

        return substr($random, 0, 10);
    }
}

if (! function_exists('untrailing_slash_it')) {
    function untrailing_slash_it(string $string): string
    {
        return rtrim($string, '/\\');
    }
}

if (! function_exists('trailing_slash_it')) {
    function trailing_slash_it(string $string): string
    {
        if ($string != config('app.url')) {
            return untrailing_slash_it($string).'/';
        }

        return $string;
    }
}

if (! function_exists('active_route')) {
    function active_route(string $route, $active = true, $default = false)
    {
        if (url()->current() == $route) {
            return $active;
        }

        return $default;
    }
}

if (! function_exists('class_has_trait')) {
    function class_has_trait($class, $trait): bool
    {
        return in_array($trait, class_uses($class));
    }
}

if (! function_exists('explodeNewline')) {
    function explodeNewline($string, $limit = 0)
    {
        if (strpos($string, "\n") === false) {
            return [$string];
        }

        return preg_split("/\r\n|\n|\r/", $string, $limit, PREG_SPLIT_NO_EMPTY);
    }
}

if (! function_exists('getAlignmentClasses')) {
    function getAlignmentClasses($alignment, $isMobile = false)
    {
        $prefix = $isMobile ? '' : 'md:';

        return match ($alignment) {
            'left' => $prefix.'text-left',
            'right' => $prefix.'text-right',
            default => $prefix.'text-center',
        };
    }
}

if (! function_exists('getImagePositionClasses')) {
    function getImagePositionClasses($position, $isMobile = false)
    {
        $prefix = $isMobile ? '' : 'md:';

        return match ($position) {
            'top-left' => $prefix.'object-left-top',
            'top-center' => $prefix.'object-top',
            'top-right' => $prefix.'object-right-top',
            'middle-left' => $prefix.'object-left',
            'middle-right' => $prefix.'object-right',
            'bottom-left' => $prefix.'object-left-bottom',
            'bottom-center' => $prefix.'object-bottom',
            'bottom-right' => $prefix.'object-right-bottom',
            default => $prefix.'object-center',
        };
    }
}

if (! function_exists('getImageHeightClasses')) {
    function getImageHeightClasses($size)
    {
        return match ($size) {
            'small' => 'md:h-[31.4rem]',
            'medium' => 'md:h-[46rem]',
            'large' => 'md:h-[69.5rem]',
            'screen' => 'md:h-screen',
            default => 'md:h-[30rem]',
        };
    }
}

if (! function_exists('getContentDirectionClasses')) {
    function getContentDirectionClasses($direction, $isMobile = false)
    {
        $prefix = $isMobile ? '' : 'md:';

        return match ($direction) {
            'text-first' => $prefix.'order-last',
            default => $prefix.'order-first',
        };
    }
}

if (! function_exists('getTextBoxClasses')) {
    function getTextBoxClasses($show, $isMobile = false)
    {
        if (! $show) {
            return '';
        }

        $paddingClass = $isMobile ? 'p-8' : 'md:p-10';
        $bgClass = $isMobile ? 'bg-foreground' : 'md:bg-foreground';

        return "$paddingClass $bgClass";
    }
}

if (! function_exists('getContentPositionClasses')) {
    function getContentPositionClasses($position, $isMobile = false)
    {
        $prefix = $isMobile ? '' : 'md:';

        return match ($position) {
            'top-left' => $prefix.'justify-start '.$prefix.'items-start',
            'top-center' => $prefix.'justify-center '.$prefix.'items-start',
            'top-right' => $prefix.'justify-end '.$prefix.'items-start',
            'middle-left' => $prefix.'justify-start '.$prefix.'items-center',
            'middle-right' => $prefix.'justify-end '.$prefix.'items-center',
            'bottom-left' => $prefix.'justify-start '.$prefix.'items-end',
            'bottom-center' => $prefix.'justify-center '.$prefix.'items-end',
            'bottom-right' => $prefix.'justify-end '.$prefix.'items-end',
            default => $prefix.'justify-center '.$prefix.'items-center',
        };
    }
}

if (! function_exists('combineClasses')) {
    function combineClasses(...$classes)
    {
        return implode(' ', array_filter($classes));
    }
}

if (! function_exists('resolveActionUrl')) {
    function resolveActionUrl($action)
    {
        if ($action['type'] !== 'External') {
            $model = app($action['type'])->find($action['data']['url']);

            if ($model) {
                $action['data']['url'] = $model->getPublicUrl();
            }

        }

        return $action['data']['url'];
    }
}
