<?php

namespace {{ namespace }}\Form\{{ entity_class }};

use Kunstmaan\ArticleBundle\Form\AbstractArticlePageAdminType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * The admin type for {{ entity_class }} pages
 */
class {{ entity_class }}PageAdminType extends AbstractArticlePageAdminType
{

    /**
     * Sets the default options for this type.
     *
     * @param OptionsResolverInterface $resolver The resolver for the options.
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => '{{ namespace }}\Entity\{{ entity_class }}\{{ entity_class }}Page'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return '{{ entity_class }}Page';
    }
}
