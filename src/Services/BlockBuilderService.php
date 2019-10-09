<?php

namespace Ntuple\BlockBuilder\Services;

use Illuminate\Support\Facades\DB;

class BlockBuilderService
{
    /**
     * @param $shortcode
     * @param $content
     *
     * @throws \Throwable
     *
     * @return string
     */
    public function register($shortcode, $content)
    {
        $data = json_decode($content);

        return $this->render($shortcode->type, $data->sql, $data->label ?? null);
    }
    /**
     * @param string $plugin
     * @param array  $label
     * @param string $sql
     *
     * @throws \Throwable
     *
     * @return string
     */
    public function render(string $plugin, string $sql, array $label = null)
    {
        $sql = $label ? str_replace('*', implode(',', $label), $sql) : $sql;

        $data['sql'] = DB::select(DB::raw($sql));

        return view('blockbuilder::components.'. $plugin, $data)->render();
    }
}
