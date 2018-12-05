<?php

namespace Ntuple\BlockBuilder\Services;

use Illuminate\Support\Facades\DB;

class BlockBuilderService
{
    /**
     * @param $shortcode
     * @param $content
     *
     * @return string
     *
     * @throws \Throwable
     */
    public function register($shortcode, $content)
    {
        $data = json_decode($content);

        return $this->render($shortcode->type, $data->label, $data->sql);
    }
    /**
     * @param string $plugin
     * @param array $label
     * @param string $sql
     *
     * @return string
     * @throws \Throwable
     */
    public function render(string $plugin, array $label, string $sql)
    {
        $sql = count($label) ? str_replace('*', implode(',', $label), $sql) : $sql;

        $data['sql'] = DB::select(DB::raw($sql));

        return view('blockbuilder::components.'. $plugin, $data)->render();
	}
}
