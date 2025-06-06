<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Hydrator\HydratorException;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\Query\Query;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;

use function array_key_exists;
use function gettype;
use function is_array;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class AppDocumentChunkedDocumentsHydrator implements HydratorInterface
{
    public function __construct(private DocumentManager $dm, private ClassMetadata $class) {}

    public function hydrate(object $document, array $data, array $hints = []): array
    {
        $hydratedData = [];

        // Field(type: "id")
        if (isset($data['_id']) || (! empty($this->class->fieldMappings['id']['nullable']) && array_key_exists('_id', $data))) {
            $value = $data['_id'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['id']['type'];
                $return = $value instanceof \MongoDB\BSON\ObjectId ? (string) $value : $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        // Field(type: "string")
        if (isset($data['content']) || (! empty($this->class->fieldMappings['content']['nullable']) && array_key_exists('content', $data))) {
            $value = $data['content'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['content']['type'];
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['content']->setValue($document, $return);
            $hydratedData['content'] = $return;
        }

        // Field(type: "string")
        if (isset($data['sourceName']) || (! empty($this->class->fieldMappings['sourceName']['nullable']) && array_key_exists('sourceName', $data))) {
            $value = $data['sourceName'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['sourceName']['type'];
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['sourceName']->setValue($document, $return);
            $hydratedData['sourceName'] = $return;
        }

        // Field(type: "date")
        if (array_key_exists('createdAt', $data) && ($data['createdAt'] !== null || ($this->class->fieldMappings['createdAt']['nullable'] ?? false))) {
            $value = $data['createdAt'];
            if ($value === null) { $return = null; } else { $return = \Doctrine\ODM\MongoDB\Types\DateType::getDateTime($value); }
            $this->class->reflFields['createdAt']->setValue($document, $return === null ? null : clone $return);
            $hydratedData['createdAt'] = $return;
        }

        // Field(type: "collection")
        if (isset($data['contentEmbedding']) || (! empty($this->class->fieldMappings['contentEmbedding']['nullable']) && array_key_exists('contentEmbedding', $data))) {
            $value = $data['contentEmbedding'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['contentEmbedding']['type'];
                $return = $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['contentEmbedding']->setValue($document, $return);
            $hydratedData['contentEmbedding'] = $return;
        }

        return $hydratedData;
    }
}