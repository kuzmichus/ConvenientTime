<?php


namespace ConvenientTime;


class ConvenientTime
{
    public function get()
    {
        $filePhrases = include(__DIR__ . '/../resources/time/ru_RU.php');
        $time = getdate();
        $hours = $time['hours'];
        $minutes = $time['minutes'];

        $common = $filePhrases['common'];

        $replacement = [
            '%current%' => $filePhrases['phrases'][$hours]['common']['current'],
            '%current_times_of_day%' => $filePhrases['phrases'][$hours]['common']['current_times_of_day'],
            '%next_times_of_day%' => $filePhrases['phrases'][$hours]['common']['next_times_of_day'],
            '%first_next%' => $filePhrases['phrases'][$hours]['common']['first_next'],
            '%quarter_next%' => $filePhrases['phrases'][$hours]['common']['quarter_next']
        ];
        unset($filePhrases['phrases'][$hours]['common']);
        $phrases = [];
        foreach ($common as $minuts_index => $f) {
            foreach ($f['phrase'] as $ind => $fr) {
                $common[$minuts_index]['phrase'][$ind] = str_replace(
                    array_keys($replacement),
                    array_values($replacement),
                    $common[$minuts_index]['phrase'][$ind]);

                if (isset($filePhrases['phrases'][$hours][$minuts_index])) {
                    $common[$minuts_index]['phrase'] = array_merge(
                        $common[$minuts_index]['phrase'],
                        $filePhrases['phrases'][$hours][$minuts_index]['phrase']
                    );
                }
                $common[$minuts_index]['phrase'] = array_unique($common[$minuts_index]['phrase']);
            }
        }

        $message = '';
        foreach ($common as $phrase) {
            if ($phrase['minutes'][0] <= $minutes && $phrase['minutes'][1] >= $minutes) {

                $message = $phrase['phrase'][array_rand($phrase['phrase'])];
            }
        }
        return $message;
    }
}
