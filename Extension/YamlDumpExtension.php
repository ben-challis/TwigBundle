<?php

namespace Alpha\TwigBundle\Extension;

use Symfony\Component\Yaml\Dumper;

class YamlDumpExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            'yaml_dump' => new \Twig_Filter_Method($this, 'yamlDump')
        );
    }

    /**
     * Convert array to yaml string
     *
     * @param array $data
     *
     * @return string The YAML representation of the array
     */
    public function yamlDump(array $data)
    {
        $dumper = new Dumper();

        return $dumper->dump($data);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'yaml_dump_extension';
    }
}
