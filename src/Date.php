<?php

namespace Date;

use Carbon\Carbon;

class Date
{
    private Carbon $date;

    //TODO: do we want this Date object to be Timezone Aware or Timezone Unaware?
    // When making it Timezone Aware: we can check whether the day is e.g., the current day
    // When making it Timezone Unaware: the object stays really simple
    public function __construct(int $year, int $month, int $day, $timezone = null)
    {
        $this->date = Carbon::create($year, $month, $day, 0, 0, 0, $timezone);
    }

    public static function create(int $year, int $month, int $day, $timezone = null): self
    {
        return new Date($year, $month, $day, $timezone);
    }

    public static function fromYmd(string $Ymd, $timezone = null): self
    {
        $carbon = Carbon::createFromFormat('Y-m-d', $Ymd, $timezone);

        return static::fromCarbon($carbon);
    }

    public static function fromCarbon(Carbon $carbon): self
    {
        return static::create($carbon->year, $carbon->month, $carbon->day, $carbon->timezone);
    }

//    public static function firstWeekendDay(): self
//    {
//        Carbon::today()->subWeekday()->addWeekday();
//        $date = new Date();
//    }

    public function isSunday(): bool
    {
        return $this->date->isSunday();
    }

    public function isMonday(): bool
    {
        return $this->date->isMonday();
    }

    public function isTuesday(): bool
    {
        return $this->date->isTuesday();
    }

    public function isWednesday(): bool
    {
        return $this->date->isWednesday();
    }

    public function isThursday(): bool
    {
        return $this->date->isThursday();
    }

    public function isFriday(): bool
    {
        return $this->date->isFriday();
    }

    public function isSaturday(): bool
    {
        return $this->date->isSaturday();
    }

    /** @param Carbon|DateTimeInterface|string|null $date */
    public function isSameYear($date = null): bool
    {
        return $this->date->isSameYear($date);
    }

    public function isCurrentYear(): bool
    {
        return $this->date->isCurrentYear();
    }

    public function isNextYear(): bool
    {
        return $this->date->isNextYear();
    }

    public function isLastYear(): bool
    {
        return $this->date->isLastYear();
    }

    /** @param Carbon|DateTimeInterface|string|null $date */
    public function isSameWeek($date = null): bool
    {
        return $this->date->isSameWeek($date);
    }

    public function isCurrentWeek(): bool
    {
        return $this->date->isCurrentWeek();
    }

    public function isNextWeek(): bool
    {
        return $this->date->isNextWeek();
    }

    public function isLastWeek(): bool
    {
        return $this->date->isLastWeek();
    }

    /** @param Carbon|DateTimeInterface|string|null */
    public function isSameDay($date = null): bool
    {
        return $this->date->isSameDay($date);
    }

    public function isCurrentDay(): bool
    {
        return $this->date->isCurrentDay();
    }

    public function isNextDay(): bool
    {
        return $this->date->isNextDay();
    }

    public function isLastDay(): bool
    {
        return $this->date->isLastDay();
    }

    public function isCurrentMonth(): bool
    {
        return $this->date->isCurrentMonth();
    }

    public function isNextMonth(): bool
    {
        return $this->date->isNextMonth();
    }

    public function isLastMonth(): bool
    {
        return $this->date->isLastMonth();
    }

    public function isCurrentQuarter(): bool
    {
        return $this->date->isCurrentQuarter();
    }

    public function isNextQuarter(): bool
    {
        return $this->date->isNextQuarter();
    }

    public function isLastQuarter(): bool
    {
        return $this->date->isLastQuarter();
    }

    /** @param Carbon|bool|DateTimeInterface|string|null */
    public function isSameDecade($date = null)
    {
        return $this->date->isSameDecade($date);
    }

    public function isCurrentDecade(): bool
    {
        return $this->date->isCurrentDecade();
    }

    public function isNextDecade(): bool
    {
        return $this->date->isNextDecade();
    }

    public function isLastDecade(): bool
    {
        return $this->date->isLastDecade();
    }

    /** @param Carbon|bool|DateTimeInterface|string|null */
    public function isSameCentury($date = null): bool
    {
        return $this->date->isSameCentury($date);
    }

    public function isCurrentCentury(): bool
    {
        return $this->date->isCurrentCentury();
    }

    public function isNextCentury(): bool
    {
        return $this->date->isNextCentury();
    }

    public function isLastCentury(): bool
    {
        return $this->date->isLastCentury();
    }

    /** @param Carbon|bool|DateTimeInterface|string|null */
    public function isSameMillennium($date = null): bool
    {
        return $this->date->isSameMillennium($date);
    }

    public function isCurrentMillennium(): bool
    {
        return $this->date->isCurrentMillennium();
    }

    public function isNextMillennium(): bool
    {
        return $this->date->isNextMillennium();
    }

    public function isLastMillennium(): bool
    {
        return $this->date->isLastMillennium();
    }

    public function setYear(int $year): self
    {
        $this->date->setYear($year);

        return $this;
    }

    public function setMonth(int $month): self
    {
        $this->date->setMonth($month);

        return $this;
    }

    public function setDay(int $day): self
    {
        $this->date->setDay($day);

        return $this;
    }

    public function addYear(): self
    {
        $this->date->addYear();

        return $this;
    }

    public function addYears(int $years = 1): self
    {
        $this->date->addYears($years);

        return $this;
    }

    public function subYears(int $years = 1): self
    {
        $this->date->subYears($years);

        return $this;
    }

    public function subYear(): self
    {
        $this->date->subYear();

        return $this;
    }

//    public function addYearsWithOverflow(int $value = 1)
//    {
//    }
//
//    public function addYearWithOverflow()
//    {
//    }
//
//    public function subYearsWithOverflow(int $value = 1)
//    {
//    }
//
//    public function subYearWithOverflow()
//    {
//    }
//
//    public function addYearsWithoutOverflow(int $value = 1)
//    {
//    }
//
//    public function addYearWithoutOverflow()
//    {
//    }
//
//    public function subYearsWithoutOverflow(int $value = 1)
//    {
//    }
//
//    public function subYearWithoutOverflow()
//    {
//    }
//
//    public function addYearsWithNoOverflow(int $value = 1)
//    {
//    }
//
//    public function addYearWithNoOverflow()
//    {
//    }
//
//    public function subYearsWithNoOverflow(int $value = 1)
//    {
//    }
//
//    public function subYearWithNoOverflow()
//    {
//    }
//
//    public function addYearsNoOverflow(int $value = 1)
//    {
//    }
//
//    public function addYearNoOverflow()
//    {
//    }
//
//    public function subYearsNoOverflow(int $value = 1)
//    {
//    }
//
//    public function subYearNoOverflow()
//    {
//    }

    public function addMonth(): self
    {
        $this->date->addMonth();

        return $this;
    }

    public function addMonths(int $months = 1): self
    {
        $this->date->addMonths($months);

        return $this;
    }

    public function subMonths(int $months = 1): self
    {
        $this->subMonths($months);

        return $this;
    }

    public function subMonth(): self
    {
        $this->date->subMonth();

        return $this;
    }

//    public function addMonthsWithOverflow(int $value = 1)
//    {
//    }
//
//    public function addMonthWithOverflow()
//    {
//    }
//
//    public function subMonthsWithOverflow(int $value = 1)
//    {
//    }
//
//    public function subMonthWithOverflow()
//    {
//    }
//
//    public function addMonthsWithoutOverflow(int $value = 1)
//    {
//    }
//
//    public function addMonthWithoutOverflow()
//    {
//    }
//
//    public function subMonthsWithoutOverflow(int $value = 1)
//    {
//    }
//
//    public function subMonthWithoutOverflow()
//    {
//    }
//
//    public function addMonthsWithNoOverflow(int $value = 1)
//    {
//    }
//
//    public function addMonthWithNoOverflow()
//    {
//    }
//
//    public function subMonthsWithNoOverflow(int $value = 1)
//    {
//    }
//
//    public function subMonthWithNoOverflow()
//    {
//    }
//
//    public function addMonthsNoOverflow(int $value = 1)
//    {
//    }
//
//    public function addMonthNoOverflow()
//    {
//    }
//
//    public function subMonthsNoOverflow(int $value = 1)
//    {
//    }
//
//    public function subMonthNoOverflow()
//    {
//    }

    public function addDay(): self
    {
        $this->date->addDay();

        return $this;
    }

    public function addDays(int $days = 1): self
    {
        $this->date->addDays($days);

        return $this;
    }

    public function subDays(int $days = 1): self
    {
        $this->date->subDays($days);

        return $this;
    }

    public function subDay(): self
    {
        $this->date->subDay();

        return $this;
    }

//    public function addMillennia(int $value = 1)
//    {
//    }
//
//    public function addMillennium()
//    {
//    }
//
//    public function subMillennia(int $value = 1)
//    {
//    }
//
//    public function subMillennium()
//    {
//    }
//
//    public function addMillenniaWithOverflow(int $value = 1)
//    {
//    }
//
//    public function addMillenniumWithOverflow()
//    {
//    }
//
//    public function subMillenniaWithOverflow(int $value = 1)
//    {
//    }
//
//    public function subMillenniumWithOverflow()
//    {
//    }
//
//    public function addMillenniaWithoutOverflow(int $value = 1)
//    {
//    }
//
//    public function addMillenniumWithoutOverflow()
//    {
//    }
//
//    public function subMillenniaWithoutOverflow(int $value = 1)
//    {
//    }
//
//    public function subMillenniumWithoutOverflow()
//    {
//    }
//
//    public function addMillenniaWithNoOverflow(int $value = 1)
//    {
//    }
//
//    public function addMillenniumWithNoOverflow()
//    {
//    }
//
//    public function subMillenniaWithNoOverflow(int $value = 1)
//    {
//    }
//
//    public function subMillenniumWithNoOverflow()
//    {
//    }
//
//    public function addMillenniaNoOverflow(int $value = 1)
//    {
//    }
//
//    public function addMillenniumNoOverflow()
//    {
//    }
//
//    public function subMillenniaNoOverflow(int $value = 1)
//    {
//    }
//
//    public function subMillenniumNoOverflow()
//    {
//    }
//
//    public function addCenturies(int $value = 1)
//    {
//    }
//
//    public function addCentury()
//    {
//    }
//
//    public function subCenturies(int $value = 1)
//    {
//    }
//
//    public function subCentury()
//    {
//    }
//
//    public function addCenturiesWithOverflow(int $value = 1)
//    {
//    }
//
//    public function addCenturyWithOverflow()
//    {
//    }
//
//    public function subCenturiesWithOverflow(int $value = 1)
//    {
//    }
//
//    public function subCenturyWithOverflow()
//    {
//    }
//
//    public function addCenturiesWithoutOverflow(int $value = 1)
//    {
//    }
//
//    public function addCenturyWithoutOverflow()
//    {
//    }
//
//    public function subCenturiesWithoutOverflow(int $value = 1)
//    {
//    }
//
//    public function subCenturyWithoutOverflow()
//    {
//    }
//
//    public function addCenturiesWithNoOverflow(int $value = 1)
//    {
//    }
//
//    public function addCenturyWithNoOverflow()
//    {
//    }
//
//    public function subCenturiesWithNoOverflow(int $value = 1)
//    {
//    }
//
//    public function subCenturyWithNoOverflow()
//    {
//    }
//
//    public function addCenturiesNoOverflow(int $value = 1)
//    {
//    }
//
//    public function addCenturyNoOverflow()
//    {
//    }
//
//    public function subCenturiesNoOverflow(int $value = 1)
//    {
//    }
//
//    public function subCenturyNoOverflow()
//    {
//    }
//
//    public function addDecades(int $value = 1)
//    {
//    }
//
//    public function addDecade()
//    {
//    }
//
//    public function subDecades(int $value = 1)
//    {
//    }
//
//    public function subDecade()
//    {
//    }
//
//    public function addDecadesWithOverflow(int $value = 1)
//    {
//    }
//
//    public function addDecadeWithOverflow()
//    {
//    }
//
//    public function subDecadesWithOverflow(int $value = 1)
//    {
//    }
//
//    public function subDecadeWithOverflow()
//    {
//    }
//
//    public function addDecadesWithoutOverflow(int $value = 1)
//    {
//    }
//
//    public function addDecadeWithoutOverflow()
//    {
//    }
//
//    public function subDecadesWithoutOverflow(int $value = 1)
//    {
//    }
//
//    public function subDecadeWithoutOverflow()
//    {
//    }
//
//    public function addDecadesWithNoOverflow(int $value = 1)
//    {
//    }
//
//    public function addDecadeWithNoOverflow()
//    {
//    }
//
//    public function subDecadesWithNoOverflow(int $value = 1)
//    {
//    }
//
//    public function subDecadeWithNoOverflow()
//    {
//    }
//
//    public function addDecadesNoOverflow(int $value = 1)
//    {
//    }
//
//    public function addDecadeNoOverflow()
//    {
//    }
//
//    public function subDecadesNoOverflow(int $value = 1)
//    {
//    }
//
//    public function subDecadeNoOverflow()
//    {
//    }
//
//    public function addQuarters(int $value = 1)
//    {
//    }
//
//    public function addQuarter()
//    {
//    }
//
//    public function subQuarters(int $value = 1)
//    {
//    }
//
//    public function subQuarter()
//    {
//    }
//
//    public function addQuartersWithOverflow(int $value = 1)
//    {
//    }
//
//    public function addQuarterWithOverflow()
//    {
//    }
//
//    public function subQuartersWithOverflow(int $value = 1)
//    {
//    }
//
//    public function subQuarterWithOverflow()
//    {
//    }
//
//    public function addQuartersWithoutOverflow(int $value = 1)
//    {
//    }
//
//    public function addQuarterWithoutOverflow()
//    {
//    }
//
//    public function subQuartersWithoutOverflow(int $value = 1)
//    {
//    }
//
//    public function subQuarterWithoutOverflow()
//    {
//    }
//
//    public function addQuartersWithNoOverflow(int $value = 1)
//    {
//    }
//
//    public function addQuarterWithNoOverflow()
//    {
//    }
//
//    public function subQuartersWithNoOverflow(int $value = 1)
//    {
//    }
//
//    public function subQuarterWithNoOverflow()
//    {
//    }
//
//    public function addQuartersNoOverflow(int $value = 1)
//    {
//    }
//
//    public function addQuarterNoOverflow()
//    {
//    }
//
//    public function subQuartersNoOverflow(int $value = 1)
//    {
//    }
//
//    public function subQuarterNoOverflow()
//    {
//    }

    public function addWeek(): self
    {
        $this->date->addWeek();

        return $this;
    }

    public function addWeeks(int $weeks = 1): self
    {
        $this->date->addWeeks($weeks);

        return $this;
    }

    public function subWeeks(int $weeks = 1): self
    {
        $this->date->subWeeks($weeks);

        return $this;
    }

    public function subWeek(): self
    {
        $this->date->subWeek();

        return $this;
    }

//    public function addWeekdays(int $value = 1)
//    {
//    }
//
//    public function addWeekday()
//    {
//    }
//
//    public function subWeekdays(int $value = 1)
//    {
//    }
//
//    public function subWeekday()
//    {
//    }
//
//    public function addRealDays(int $value = 1)
//    {
//    }
//
//    public function addRealDay()
//    {
//    }
//
//    public function subRealDays(int $value = 1)
//    {
//    }
//
//    public function subRealDay()
//    {
//    }
//
//    public function daysUntil($endDate = null, int $factor = 1)
//    {
//    }
//
//    public function addRealWeeks(int $value = 1)
//    {
//    }
//
//    public function addRealWeek()
//    {
//    }
//
//    public function subRealWeeks(int $value = 1)
//    {
//    }
//
//    public function subRealWeek()
//    {
//    }
//
//    public function weeksUntil($endDate = null, int $factor = 1)
//    {
//    }
//
//    public function addRealMonths(int $value = 1)
//    {
//    }
//
//    public function addRealMonth()
//    {
//    }
//
//    public function subRealMonths(int $value = 1)
//    {
//    }
//
//    public function subRealMonth()
//    {
//    }
//
//    public function monthsUntil($endDate = null, int $factor = 1)
//    {
//    }
//
//    public function addRealQuarters(int $value = 1)
//    {
//    }
//
//    public function addRealQuarter()
//    {
//    }
//
//    public function subRealQuarters(int $value = 1)
//    {
//    }
//
//    public function subRealQuarter()
//    {
//    }
//
//    public function quartersUntil($endDate = null, int $factor = 1)
//    {
//    }
//
//    public function addRealYears(int $value = 1)
//    {
//    }
//
//    public function addRealYear()
//    {
//    }
//
//    public function subRealYears(int $value = 1)
//    {
//    }
//
//    public function subRealYear()
//    {
//    }
//
//    public function yearsUntil($endDate = null, int $factor = 1)
//    {
//    }
//
//    public function addRealDecades(int $value = 1)
//    {
//    }
//
//    public function addRealDecade()
//    {
//    }
//
//    public function subRealDecades(int $value = 1)
//    {
//    }
//
//    public function subRealDecade()
//    {
//    }
//
//    public function decadesUntil($endDate = null, int $factor = 1)
//    {
//    }
//
//    public function addRealCenturies(int $value = 1)
//    {
//    }
//
//    public function addRealCentury()
//    {
//    }
//
//    public function subRealCenturies(int $value = 1)
//    {
//    }
//
//    public function subRealCentury()
//    {
//    }
//
//    public function centuriesUntil($endDate = null, int $factor = 1)
//    {
//    }
//
//    public function addRealMillennia(int $value = 1)
//    {
//    }
//
//    public function addRealMillennium()
//    {
//    }
//
//    public function subRealMillennia(int $value = 1)
//    {
//    }
//
//    public function subRealMillennium()
//    {
//    }
//
//    public function millenniaUntil($endDate = null, int $factor = 1)
//    {
//    }
//
//    public function roundYear(float $precision = 1, string $function = "round")
//    {
//    }
//
//    public function roundYears(float $precision = 1, string $function = "round")
//    {
//    }
//
//    public function floorYear(float $precision = 1)
//    {
//    }
//
//    public function floorYears(float $precision = 1)
//    {
//    }
//
//    public function ceilYear(float $precision = 1)
//    {
//    }
//
//    public function ceilYears(float $precision = 1)
//    {
//    }
//
//    public function roundMonth(float $precision = 1, string $function = "round")
//    {
//    }
//
//    public function roundMonths(float $precision = 1, string $function = "round")
//    {
//    }
//
//    public function floorMonth(float $precision = 1)
//    {
//    }
//
//    public function floorMonths(float $precision = 1)
//    {
//    }
//
//    public function ceilMonth(float $precision = 1)
//    {
//    }
//
//    public function ceilMonths(float $precision = 1)
//    {
//    }
//
//    public function roundDay(float $precision = 1, string $function = "round")
//    {
//    }
//
//    public function roundDays(float $precision = 1, string $function = "round")
//    {
//    }
//
//    public function floorDay(float $precision = 1)
//    {
//    }
//
//    public function floorDays(float $precision = 1)
//    {
//    }
//
//    public function ceilDay(float $precision = 1)
//    {
//    }
//
//    public function ceilDays(float $precision = 1)
//    {
//    }
//
//    public function roundMillennium(float $precision = 1, string $function = "round")
//    {
//    }
//
//    public function roundMillennia(float $precision = 1, string $function = "round")
//    {
//    }
//
//    public function floorMillennium(float $precision = 1)
//    {
//    }
//
//    public function floorMillennia(float $precision = 1)
//    {
//    }
//
//    public function ceilMillennium(float $precision = 1)
//    {
//    }
//
//    public function ceilMillennia(float $precision = 1)
//    {
//    }
//
//    public function roundCentury(float $precision = 1, string $function = "round")
//    {
//    }
//
//    public function roundCenturies(float $precision = 1, string $function = "round")
//    {
//    }
//
//    public function floorCentury(float $precision = 1)
//    {
//    }
//
//    public function floorCenturies(float $precision = 1)
//    {
//    }
//
//    public function ceilCentury(float $precision = 1)
//    {
//    }
//
//    public function ceilCenturies(float $precision = 1)
//    {
//    }
//
//    public function roundDecade(float $precision = 1, string $function = "round")
//    {
//    }
//
//    public function roundDecades(float $precision = 1, string $function = "round")
//    {
//    }
//
//    public function floorDecade(float $precision = 1)
//    {
//    }
//
//    public function floorDecades(float $precision = 1)
//    {
//    }
//
//    public function ceilDecade(float $precision = 1)
//    {
//    }
//
//    public function ceilDecades(float $precision = 1)
//    {
//    }
//
//    public function roundQuarter(float $precision = 1, string $function = "round")
//    {
//    }
//
//    public function roundQuarters(float $precision = 1, string $function = "round")
//    {
//    }
//
//    public function floorQuarter(float $precision = 1)
//    {
//    }
//
//    public function floorQuarters(float $precision = 1)
//    {
//    }
//
//    public function ceilQuarter(float $precision = 1)
//    {
//    }
//
//    public function ceilQuarters(float $precision = 1)
//    {
//    }
//
//    public function shortAbsoluteDiffForHumans(DateTimeInterface $other = null, int $parts = 1)
//    {
//    }
//
//    public function longAbsoluteDiffForHumans(DateTimeInterface $other = null, int $parts = 1)
//    {
//    }
//
//    public function shortRelativeDiffForHumans(DateTimeInterface $other = null, int $parts = 1)
//    {
//    }
//
//    public function longRelativeDiffForHumans(DateTimeInterface $other = null, int $parts = 1)
//    {
//    }
//
//    public function shortRelativeToNowDiffForHumans(DateTimeInterface $other = null, int $parts = 1)
//    {
//    }
//
//    public function longRelativeToNowDiffForHumans(DateTimeInterface $other = null, int $parts = 1)
//    {
//    }
//
//    public function shortRelativeToOtherDiffForHumans(DateTimeInterface $other = null, int $parts = 1)
//    {
//    }
//
//    public function longRelativeToOtherDiffForHumans(DateTimeInterface $other = null, int $parts = 1)
//    {
//    }
//
//    public function createFromFormat(string $format, string $time, string|DateTimeZone $timezone = null)
//    {
//    }
//
//    public function __set_state(array $array)
//    {
//    }

    public function toCarbon(): Carbon
    {
        return $this->date->copy();
    }

    public function toDateTime(): DateTime
    {
        return $this->date->toDateTime();
    }

    public function __toString(): string
    {
        return $this->date->toDateString();
    }
}