<x-dynamic-component
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div class="relative" x-data="{
        state: $wire.{{ $applyStateBindingModifiers('entangle(\'' . $getStatePath() . '\')') }}
    }">

        <input
            id="{{$getId()}}"
            type="range"
            x-model="state"
            class="focus:outline-none focus:bg-primary-200 dark:focus:bg-primary-900 disabled:opacity-70 disabled:cursor-not-allowed filament-forms-range-component border-gray-300 bg-gray-200 dark:bg-white/10 w-90"
        {!! $isRequired() ? 'required' : null !!}
        {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
        min="{{ $getMin()}}"
        max="{{ $getMax()}}"
        step="{{ $getStep()}}"
        dusk="filament.forms.{{ $getStatePath() }}"
        {!! $isDisabled() ? 'disabled' : null !!}
        />

        @if (($steps = $getSteps()) && $getDisplaySteps() === true)
            <ul class="flex justify-between w-full px-[10px]">
                <li @click="state = {{ $getStepsAssoc() ? $key : $loop->iteration }}">
                    <span
                        class="cursor-pointer text-xs hover:text-primary-500 dark:hover:text-primary-500 font-medium leading-4 text-gray-700 dark:text-gray-300"
                        x-bind:class="{
                            'dark:text-primary-500 text-primary-500': state === {{ $getStepsAssoc() ? $key : $loop->iteration }},
                        }"
                    >
                        {{ $step }}
                    </span>
                </li>
            </ul>
        @endif

        <div class="w-full flex justify-between text-xs ">
            @for($i=$getMin(); $i <= $getMax(); $i+=$getStep())
                <div class="flex flex-col items-center gap-y-1 text-gray-500">
                    <span class="max-h-[12px] overflow-hidden px-2">|</span>
                    <span>{{$i}}</span>
                </div>
            @endfor
        </div>
    </div>
</x-dynamic-component>
