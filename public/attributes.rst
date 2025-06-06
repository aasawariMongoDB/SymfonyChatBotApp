Symfony Attributes Overview
===========================

Attributes are the successor of annotations since PHP 8. Attributes are native
to the language and Symfony takes full advantage of them across the framework
and its different components.

Doctrine Bridge
~~~~~~~~~~~~~~~

* :doc:`UniqueEntity </reference/constraints/UniqueEntity>`
* :ref:`MapEntity <doctrine-entity-value-resolver>`

Command
~~~~~~~

* :ref:`AsCommand <console_registering-the-command>`

Contracts
~~~~~~~~~

* :ref:`Required <autowiring-calls>`
* :ref:`SubscribedService <service-subscribers-service-subscriber-trait>`

Dependency Injection
~~~~~~~~~~~~~~~~~~~~

* :ref:`AsAlias <services-alias>`
* :doc:`AsDecorator </service_container/service_decoration>`
* :ref:`AsTaggedItem <tags_as-tagged-item>`
* :ref:`Autoconfigure <lazy-services_configuration>`
* :ref:`AutoconfigureTag <di-instanceof>`
* :ref:`Autowire <autowire-attribute>`
* :ref:`AutowireCallable <autowiring_closures>`
* :doc:`AutowireDecorated </service_container/service_decoration>`
* :ref:`AutowireIterator <service-locator_autowire-iterator>`
* :ref:`AutowireLocator <service-locator_autowire-locator>`
* :ref:`AutowireMethodOf <autowiring_closures>`
* :ref:`AutowireServiceClosure <autowiring_closures>`
* :ref:`Exclude <service-psr4-loader>`
* :ref:`Lazy <lazy-services_configuration>`
* :ref:`TaggedIterator <tags_reference-tagged-services>`
* :ref:`TaggedLocator <service-subscribers-locators_defining-service-locator>`
* :ref:`Target <autowiring-multiple-implementations-same-type>`
* :ref:`When <service-container_limiting-to-env>`
* :ref:`WhenNot <service-container_limiting-to-env>`

.. deprecated:: 7.1

    The :class:`Symfony\\Component\\DependencyInjection\\Attribute\\TaggedIterator`
    and :class:`Symfony\\Component\\DependencyInjection\\Attribute\\TaggedLocator`
    attributes were deprecated in Symfony 7.1.

EventDispatcher
~~~~~~~~~~~~~~~

* :ref:`AsEventListener <event-dispatcher_event-listener-attributes>`

FrameworkBundle
~~~~~~~~~~~~~~~

* :ref:`AsRoutingConditionService <routing-matching-expressions>`

HttpKernel
~~~~~~~~~~

* :doc:`AsController </controller/service>`
* :ref:`AsTargetedValueResolver <controller-targeted-value-resolver>`
* :ref:`Cache <http-cache-expiration-intro>`
* :ref:`MapDateTime <functionality-shipped-with-the-httpkernel>`
* :ref:`MapQueryParameter <controller_map-request>`
* :ref:`MapQueryString <controller_map-request>`
* :ref:`MapRequestPayload <controller_map-request>`
* :ref:`MapUploadedFile <controller_map-uploaded-file>`
* :ref:`ValueResolver <managing-value-resolvers>`
* :ref:`WithHttpStatus <framework_exceptions>`
* :ref:`WithLogLevel <framework_exceptions>`

Messenger
~~~~~~~~~

* :ref:`AsMessage <messenger-message-attribute>`
* :ref:`AsMessageHandler <messenger-handler>`

RemoteEvent
~~~~~~~~~~~

* :ref:`AsRemoteEventConsumer <webhook>`

Routing
~~~~~~~

* :doc:`Route </routing>`

Scheduler
~~~~~~~~~

* :ref:`AsCronTask <scheduler-attributes-cron-task>`
* :ref:`AsPeriodicTask <scheduler-attributes-periodic-task>`
* :ref:`AsSchedule <scheduler_attaching-recurring-messages>`

Security
~~~~~~~~

* :ref:`CurrentUser <security-json-login>`
* :ref:`IsCsrfTokenValid <csrf-controller-attributes>`
* :ref:`IsGranted <security-securing-controller-attributes>`

.. _reference-attributes-serializer:

Serializer
~~~~~~~~~~

* :ref:`Context <serializer-context>`
* :ref:`DiscriminatorMap <serializer_interfaces-and-abstract-classes>`
* :ref:`Groups <serializer-groups-attribute>`
* :ref:`Ignore <serializer_ignoring-attributes>`
* :ref:`MaxDepth <serializer_handling-serialization-depth>`
* :ref:`SerializedName <serializer-name-conversion>`
* :ref:`SerializedPath <serializer-nested-structures>`

Twig
~~~~

* :ref:`Template <templates-template-attribute>`

Symfony UX
~~~~~~~~~~

* `AsEntityAutocompleteField`_
* `AsLiveComponent`_
* `AsTwigComponent`_
* `Broadcast`_

Validator
~~~~~~~~~

Each validation constraint comes with a PHP attribute. See
:doc:`/reference/constraints` for a full list of validation constraints.

* :doc:`HasNamedArguments </validation/custom_constraint>`

Workflow
~~~~~~~~

* :ref:`AsAnnounceListener <workflow_using-events>`
* :ref:`AsCompletedListener <workflow_using-events>`
* :ref:`AsEnterListener <workflow_using-events>`
* :ref:`AsEnteredListener <workflow_using-events>`
* :ref:`AsGuardListener <workflow_using-events>`
* :ref:`AsLeaveListener <workflow_using-events>`
* :ref:`AsTransitionListener <workflow_using-events>`

.. _`AsEntityAutocompleteField`: https://symfony.com/bundles/ux-autocomplete/current/index.html#usage-in-a-form-with-ajax
.. _`AsLiveComponent`: https://symfony.com/bundles/ux-live-component/current/index.html
.. _`AsTwigComponent`: https://symfony.com/bundles/ux-twig-component/current/index.html
.. _`Broadcast`: https://symfony.com/bundles/ux-turbo/current/index.html#broadcast-conventions-and-configuration
