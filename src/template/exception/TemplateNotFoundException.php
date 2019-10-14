<?php declare (strict_types = 1);
#coding: utf-8
# +-------------------------------------------------------------------
# | 获取模板文件
# +-------------------------------------------------------------------
# | Copyright (c) 2017-2019 Sower rights reserved.
# +-------------------------------------------------------------------
# +-------------------------------------------------------------------
namespace sower\template\exception;

class TemplateNotFoundException extends \RuntimeException
{
    protected $template;

    public function __construct(string $message, string $template = '')
    {
        $this->message  = $message;
        $this->template = $template;
    }

    /**
     * 获取模板文件
     * @access public
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->template;
    }
}
