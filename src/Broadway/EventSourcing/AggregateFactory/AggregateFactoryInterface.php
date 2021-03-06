<?php

namespace Broadway\EventSourcing\AggregateFactory;

use Broadway\Domain\DomainEventStreamInterface;

/**
 * Interface AggregateFactoryInterface
 */
interface AggregateFactoryInterface
{
    /**
     * @param string $aggregateClass the FQCN of the Aggregate to create
     * @param DomainEventStreamInterface $domainEventStream
     *
     * @return \Broadway\EventSourcing\EventSourcedAggregateRoot
     */
    public function create($aggregateClass, DomainEventStreamInterface $domainEventStream);
}
