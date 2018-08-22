<?php
declare(strict_types=1);

namespace K3ssen\GeneratorBundle\MetaData\Property;

use Doctrine\DBAL\Types\Type;

class DateImmutableMetaProperty extends AbstractPrimitiveMetaProperty implements DateImmutableMetaPropertyInterface
{
    public const ORM_TYPE = Type::DATE_IMMUTABLE;
    public const RETURN_TYPE = '\DateTimeImmutable';
    public const ORM_TYPE_ALIAS = 'dim';
}
