<?php

return [
    'interfaces' => [
        'google.ads.googleads.v11.services.OfflineUserDataJobService' => [
            'RunOfflineUserDataJob' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Protobuf\GPBEmpty',
                    'metadataReturnType' => '\Google\Ads\GoogleAds\V11\Resources\OfflineUserDataJobMetadata',
                    'initialPollDelayMillis' => '300000',
                    'pollDelayMultiplier' => '1.25',
                    'maxPollDelayMillis' => '3600000',
                    'totalPollTimeoutMillis' => '43200000',
                ],
            ],
        ],
    ],
];
