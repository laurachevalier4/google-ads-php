<?php

/**
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

// Generated code ; DO NOT EDIT.

namespace Google\Ads\GoogleAds\Lib\V10;

use Google\Ads\GoogleAds\V10\Services\AccountBudgetProposalServiceClient;
use Google\Ads\GoogleAds\V10\Services\AccountLinkServiceClient;
use Google\Ads\GoogleAds\V10\Services\AdGroupAdLabelServiceClient;
use Google\Ads\GoogleAds\V10\Services\AdGroupAdServiceClient;
use Google\Ads\GoogleAds\V10\Services\AdGroupAssetServiceClient;
use Google\Ads\GoogleAds\V10\Services\AdGroupBidModifierServiceClient;
use Google\Ads\GoogleAds\V10\Services\AdGroupCriterionCustomizerServiceClient;
use Google\Ads\GoogleAds\V10\Services\AdGroupCriterionLabelServiceClient;
use Google\Ads\GoogleAds\V10\Services\AdGroupCriterionServiceClient;
use Google\Ads\GoogleAds\V10\Services\AdGroupCustomizerServiceClient;
use Google\Ads\GoogleAds\V10\Services\AdGroupExtensionSettingServiceClient;
use Google\Ads\GoogleAds\V10\Services\AdGroupFeedServiceClient;
use Google\Ads\GoogleAds\V10\Services\AdGroupLabelServiceClient;
use Google\Ads\GoogleAds\V10\Services\AdGroupServiceClient;
use Google\Ads\GoogleAds\V10\Services\AdParameterServiceClient;
use Google\Ads\GoogleAds\V10\Services\AdServiceClient;
use Google\Ads\GoogleAds\V10\Services\AssetGroupAssetServiceClient;
use Google\Ads\GoogleAds\V10\Services\AssetGroupListingGroupFilterServiceClient;
use Google\Ads\GoogleAds\V10\Services\AssetGroupServiceClient;
use Google\Ads\GoogleAds\V10\Services\AssetGroupSignalServiceClient;
use Google\Ads\GoogleAds\V10\Services\AssetServiceClient;
use Google\Ads\GoogleAds\V10\Services\AssetSetAssetServiceClient;
use Google\Ads\GoogleAds\V10\Services\AssetSetServiceClient;
use Google\Ads\GoogleAds\V10\Services\AudienceServiceClient;
use Google\Ads\GoogleAds\V10\Services\BatchJobServiceClient;
use Google\Ads\GoogleAds\V10\Services\BiddingDataExclusionServiceClient;
use Google\Ads\GoogleAds\V10\Services\BiddingSeasonalityAdjustmentServiceClient;
use Google\Ads\GoogleAds\V10\Services\BiddingStrategyServiceClient;
use Google\Ads\GoogleAds\V10\Services\BillingSetupServiceClient;
use Google\Ads\GoogleAds\V10\Services\CampaignAssetServiceClient;
use Google\Ads\GoogleAds\V10\Services\CampaignAssetSetServiceClient;
use Google\Ads\GoogleAds\V10\Services\CampaignBidModifierServiceClient;
use Google\Ads\GoogleAds\V10\Services\CampaignBudgetServiceClient;
use Google\Ads\GoogleAds\V10\Services\CampaignConversionGoalServiceClient;
use Google\Ads\GoogleAds\V10\Services\CampaignCriterionServiceClient;
use Google\Ads\GoogleAds\V10\Services\CampaignCustomizerServiceClient;
use Google\Ads\GoogleAds\V10\Services\CampaignDraftServiceClient;
use Google\Ads\GoogleAds\V10\Services\CampaignExperimentServiceClient;
use Google\Ads\GoogleAds\V10\Services\CampaignExtensionSettingServiceClient;
use Google\Ads\GoogleAds\V10\Services\CampaignFeedServiceClient;
use Google\Ads\GoogleAds\V10\Services\CampaignGroupServiceClient;
use Google\Ads\GoogleAds\V10\Services\CampaignLabelServiceClient;
use Google\Ads\GoogleAds\V10\Services\CampaignServiceClient;
use Google\Ads\GoogleAds\V10\Services\CampaignSharedSetServiceClient;
use Google\Ads\GoogleAds\V10\Services\ConversionActionServiceClient;
use Google\Ads\GoogleAds\V10\Services\ConversionAdjustmentUploadServiceClient;
use Google\Ads\GoogleAds\V10\Services\ConversionCustomVariableServiceClient;
use Google\Ads\GoogleAds\V10\Services\ConversionGoalCampaignConfigServiceClient;
use Google\Ads\GoogleAds\V10\Services\ConversionUploadServiceClient;
use Google\Ads\GoogleAds\V10\Services\ConversionValueRuleServiceClient;
use Google\Ads\GoogleAds\V10\Services\ConversionValueRuleSetServiceClient;
use Google\Ads\GoogleAds\V10\Services\CustomAudienceServiceClient;
use Google\Ads\GoogleAds\V10\Services\CustomConversionGoalServiceClient;
use Google\Ads\GoogleAds\V10\Services\CustomerAssetServiceClient;
use Google\Ads\GoogleAds\V10\Services\CustomerClientLinkServiceClient;
use Google\Ads\GoogleAds\V10\Services\CustomerConversionGoalServiceClient;
use Google\Ads\GoogleAds\V10\Services\CustomerCustomizerServiceClient;
use Google\Ads\GoogleAds\V10\Services\CustomerExtensionSettingServiceClient;
use Google\Ads\GoogleAds\V10\Services\CustomerFeedServiceClient;
use Google\Ads\GoogleAds\V10\Services\CustomerLabelServiceClient;
use Google\Ads\GoogleAds\V10\Services\CustomerManagerLinkServiceClient;
use Google\Ads\GoogleAds\V10\Services\CustomerNegativeCriterionServiceClient;
use Google\Ads\GoogleAds\V10\Services\CustomerServiceClient;
use Google\Ads\GoogleAds\V10\Services\CustomerUserAccessInvitationServiceClient;
use Google\Ads\GoogleAds\V10\Services\CustomerUserAccessServiceClient;
use Google\Ads\GoogleAds\V10\Services\CustomInterestServiceClient;
use Google\Ads\GoogleAds\V10\Services\CustomizerAttributeServiceClient;
use Google\Ads\GoogleAds\V10\Services\ExperimentArmServiceClient;
use Google\Ads\GoogleAds\V10\Services\ExperimentServiceClient;
use Google\Ads\GoogleAds\V10\Services\ExtensionFeedItemServiceClient;
use Google\Ads\GoogleAds\V10\Services\FeedItemServiceClient;
use Google\Ads\GoogleAds\V10\Services\FeedItemSetLinkServiceClient;
use Google\Ads\GoogleAds\V10\Services\FeedItemSetServiceClient;
use Google\Ads\GoogleAds\V10\Services\FeedItemTargetServiceClient;
use Google\Ads\GoogleAds\V10\Services\FeedMappingServiceClient;
use Google\Ads\GoogleAds\V10\Services\FeedServiceClient;
use Google\Ads\GoogleAds\V10\Services\GeoTargetConstantServiceClient;
use Google\Ads\GoogleAds\V10\Services\GoogleAdsFieldServiceClient;
use Google\Ads\GoogleAds\V10\Services\GoogleAdsServiceClient;
use Google\Ads\GoogleAds\V10\Services\InvoiceServiceClient;
use Google\Ads\GoogleAds\V10\Services\KeywordPlanAdGroupKeywordServiceClient;
use Google\Ads\GoogleAds\V10\Services\KeywordPlanAdGroupServiceClient;
use Google\Ads\GoogleAds\V10\Services\KeywordPlanCampaignKeywordServiceClient;
use Google\Ads\GoogleAds\V10\Services\KeywordPlanCampaignServiceClient;
use Google\Ads\GoogleAds\V10\Services\KeywordPlanIdeaServiceClient;
use Google\Ads\GoogleAds\V10\Services\KeywordPlanServiceClient;
use Google\Ads\GoogleAds\V10\Services\KeywordThemeConstantServiceClient;
use Google\Ads\GoogleAds\V10\Services\LabelServiceClient;
use Google\Ads\GoogleAds\V10\Services\MediaFileServiceClient;
use Google\Ads\GoogleAds\V10\Services\MerchantCenterLinkServiceClient;
use Google\Ads\GoogleAds\V10\Services\OfflineUserDataJobServiceClient;
use Google\Ads\GoogleAds\V10\Services\PaymentsAccountServiceClient;
use Google\Ads\GoogleAds\V10\Services\ReachPlanServiceClient;
use Google\Ads\GoogleAds\V10\Services\RecommendationServiceClient;
use Google\Ads\GoogleAds\V10\Services\RemarketingActionServiceClient;
use Google\Ads\GoogleAds\V10\Services\SharedCriterionServiceClient;
use Google\Ads\GoogleAds\V10\Services\SharedSetServiceClient;
use Google\Ads\GoogleAds\V10\Services\SmartCampaignSettingServiceClient;
use Google\Ads\GoogleAds\V10\Services\SmartCampaignSuggestServiceClient;
use Google\Ads\GoogleAds\V10\Services\ThirdPartyAppAnalyticsLinkServiceClient;
use Google\Ads\GoogleAds\V10\Services\UserDataServiceClient;
use Google\Ads\GoogleAds\V10\Services\UserListServiceClient;
use Google\Auth\FetchAuthTokenInterface;
use Monolog\Handler\NullHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `ServiceClientFactoryTrait`.
 *
 * @covers \Google\Ads\GoogleAds\Lib\V10\ServiceClientFactoryTrait
 * @small
 */
class ServiceClientFactoryTraitTest extends TestCase
{
    private static $DEVELOPER_TOKEN = 'ABcdeFGH93KL-NOPQ_STUv';
    private static $LOGIN_CUSTOMER_ID = '1234567890';
    private static $PROXY = 'http://localhost:8080';
    private static $TRANSPORT = 'grpc';

    /** @var GoogleAdsClient $googleAdsClient */
    private $googleAdsClient;

    /**
     * @see \PHPUnit\Framework\TestCase::setUp()
     */
    protected function setUp(): void
    {
        $googleAdsClientBuilder = new GoogleAdsClientBuilder();
        $fetchAuthTokenInterfaceMock = $this
            ->getMockBuilder(FetchAuthTokenInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->googleAdsClient = $googleAdsClientBuilder
            ->withOAuth2Credential($fetchAuthTokenInterfaceMock)
            ->withDeveloperToken(self::$DEVELOPER_TOKEN)
            ->withLoginCustomerId(self::$LOGIN_CUSTOMER_ID)
            ->withLogger(new Logger('', [new NullHandler()]))
            ->withProxy(self::$PROXY)
            ->withTransport(self::$TRANSPORT)
            ->build();
    }

    public function testGetAccountBudgetProposalServiceClient()
    {
        $this->assertInstanceOf(
            AccountBudgetProposalServiceClient::class,
            $this->googleAdsClient->getAccountBudgetProposalServiceClient()
        );
    }

    public function testGetAccountLinkServiceClient()
    {
        $this->assertInstanceOf(
            AccountLinkServiceClient::class,
            $this->googleAdsClient->getAccountLinkServiceClient()
        );
    }

    public function testGetAdGroupAdLabelServiceClient()
    {
        $this->assertInstanceOf(
            AdGroupAdLabelServiceClient::class,
            $this->googleAdsClient->getAdGroupAdLabelServiceClient()
        );
    }

    public function testGetAdGroupAdServiceClient()
    {
        $this->assertInstanceOf(
            AdGroupAdServiceClient::class,
            $this->googleAdsClient->getAdGroupAdServiceClient()
        );
    }

    public function testGetAdGroupAssetServiceClient()
    {
        $this->assertInstanceOf(
            AdGroupAssetServiceClient::class,
            $this->googleAdsClient->getAdGroupAssetServiceClient()
        );
    }

    public function testGetAdGroupBidModifierServiceClient()
    {
        $this->assertInstanceOf(
            AdGroupBidModifierServiceClient::class,
            $this->googleAdsClient->getAdGroupBidModifierServiceClient()
        );
    }

    public function testGetAdGroupCriterionCustomizerServiceClient()
    {
        $this->assertInstanceOf(
            AdGroupCriterionCustomizerServiceClient::class,
            $this->googleAdsClient->getAdGroupCriterionCustomizerServiceClient()
        );
    }

    public function testGetAdGroupCriterionLabelServiceClient()
    {
        $this->assertInstanceOf(
            AdGroupCriterionLabelServiceClient::class,
            $this->googleAdsClient->getAdGroupCriterionLabelServiceClient()
        );
    }

    public function testGetAdGroupCriterionServiceClient()
    {
        $this->assertInstanceOf(
            AdGroupCriterionServiceClient::class,
            $this->googleAdsClient->getAdGroupCriterionServiceClient()
        );
    }

    public function testGetAdGroupCustomizerServiceClient()
    {
        $this->assertInstanceOf(
            AdGroupCustomizerServiceClient::class,
            $this->googleAdsClient->getAdGroupCustomizerServiceClient()
        );
    }

    public function testGetAdGroupExtensionSettingServiceClient()
    {
        $this->assertInstanceOf(
            AdGroupExtensionSettingServiceClient::class,
            $this->googleAdsClient->getAdGroupExtensionSettingServiceClient()
        );
    }

    public function testGetAdGroupFeedServiceClient()
    {
        $this->assertInstanceOf(
            AdGroupFeedServiceClient::class,
            $this->googleAdsClient->getAdGroupFeedServiceClient()
        );
    }

    public function testGetAdGroupLabelServiceClient()
    {
        $this->assertInstanceOf(
            AdGroupLabelServiceClient::class,
            $this->googleAdsClient->getAdGroupLabelServiceClient()
        );
    }

    public function testGetAdGroupServiceClient()
    {
        $this->assertInstanceOf(
            AdGroupServiceClient::class,
            $this->googleAdsClient->getAdGroupServiceClient()
        );
    }

    public function testGetAdParameterServiceClient()
    {
        $this->assertInstanceOf(
            AdParameterServiceClient::class,
            $this->googleAdsClient->getAdParameterServiceClient()
        );
    }

    public function testGetAdServiceClient()
    {
        $this->assertInstanceOf(
            AdServiceClient::class,
            $this->googleAdsClient->getAdServiceClient()
        );
    }

    public function testGetAssetGroupAssetServiceClient()
    {
        $this->assertInstanceOf(
            AssetGroupAssetServiceClient::class,
            $this->googleAdsClient->getAssetGroupAssetServiceClient()
        );
    }

    public function testGetAssetGroupListingGroupFilterServiceClient()
    {
        $this->assertInstanceOf(
            AssetGroupListingGroupFilterServiceClient::class,
            $this->googleAdsClient->getAssetGroupListingGroupFilterServiceClient()
        );
    }

    public function testGetAssetGroupServiceClient()
    {
        $this->assertInstanceOf(
            AssetGroupServiceClient::class,
            $this->googleAdsClient->getAssetGroupServiceClient()
        );
    }

    public function testGetAssetGroupSignalServiceClient()
    {
        $this->assertInstanceOf(
            AssetGroupSignalServiceClient::class,
            $this->googleAdsClient->getAssetGroupSignalServiceClient()
        );
    }

    public function testGetAssetServiceClient()
    {
        $this->assertInstanceOf(
            AssetServiceClient::class,
            $this->googleAdsClient->getAssetServiceClient()
        );
    }

    public function testGetAssetSetAssetServiceClient()
    {
        $this->assertInstanceOf(
            AssetSetAssetServiceClient::class,
            $this->googleAdsClient->getAssetSetAssetServiceClient()
        );
    }

    public function testGetAssetSetServiceClient()
    {
        $this->assertInstanceOf(
            AssetSetServiceClient::class,
            $this->googleAdsClient->getAssetSetServiceClient()
        );
    }

    public function testGetAudienceServiceClient()
    {
        $this->assertInstanceOf(
            AudienceServiceClient::class,
            $this->googleAdsClient->getAudienceServiceClient()
        );
    }

    public function testGetBatchJobServiceClient()
    {
        $this->assertInstanceOf(
            BatchJobServiceClient::class,
            $this->googleAdsClient->getBatchJobServiceClient()
        );
    }

    public function testGetBiddingDataExclusionServiceClient()
    {
        $this->assertInstanceOf(
            BiddingDataExclusionServiceClient::class,
            $this->googleAdsClient->getBiddingDataExclusionServiceClient()
        );
    }

    public function testGetBiddingSeasonalityAdjustmentServiceClient()
    {
        $this->assertInstanceOf(
            BiddingSeasonalityAdjustmentServiceClient::class,
            $this->googleAdsClient->getBiddingSeasonalityAdjustmentServiceClient()
        );
    }

    public function testGetBiddingStrategyServiceClient()
    {
        $this->assertInstanceOf(
            BiddingStrategyServiceClient::class,
            $this->googleAdsClient->getBiddingStrategyServiceClient()
        );
    }

    public function testGetBillingSetupServiceClient()
    {
        $this->assertInstanceOf(
            BillingSetupServiceClient::class,
            $this->googleAdsClient->getBillingSetupServiceClient()
        );
    }

    public function testGetCampaignAssetServiceClient()
    {
        $this->assertInstanceOf(
            CampaignAssetServiceClient::class,
            $this->googleAdsClient->getCampaignAssetServiceClient()
        );
    }

    public function testGetCampaignAssetSetServiceClient()
    {
        $this->assertInstanceOf(
            CampaignAssetSetServiceClient::class,
            $this->googleAdsClient->getCampaignAssetSetServiceClient()
        );
    }

    public function testGetCampaignBidModifierServiceClient()
    {
        $this->assertInstanceOf(
            CampaignBidModifierServiceClient::class,
            $this->googleAdsClient->getCampaignBidModifierServiceClient()
        );
    }

    public function testGetCampaignBudgetServiceClient()
    {
        $this->assertInstanceOf(
            CampaignBudgetServiceClient::class,
            $this->googleAdsClient->getCampaignBudgetServiceClient()
        );
    }

    public function testGetCampaignConversionGoalServiceClient()
    {
        $this->assertInstanceOf(
            CampaignConversionGoalServiceClient::class,
            $this->googleAdsClient->getCampaignConversionGoalServiceClient()
        );
    }

    public function testGetCampaignCriterionServiceClient()
    {
        $this->assertInstanceOf(
            CampaignCriterionServiceClient::class,
            $this->googleAdsClient->getCampaignCriterionServiceClient()
        );
    }

    public function testGetCampaignCustomizerServiceClient()
    {
        $this->assertInstanceOf(
            CampaignCustomizerServiceClient::class,
            $this->googleAdsClient->getCampaignCustomizerServiceClient()
        );
    }

    public function testGetCampaignDraftServiceClient()
    {
        $this->assertInstanceOf(
            CampaignDraftServiceClient::class,
            $this->googleAdsClient->getCampaignDraftServiceClient()
        );
    }

    public function testGetCampaignExperimentServiceClient()
    {
        $this->assertInstanceOf(
            CampaignExperimentServiceClient::class,
            $this->googleAdsClient->getCampaignExperimentServiceClient()
        );
    }

    public function testGetCampaignExtensionSettingServiceClient()
    {
        $this->assertInstanceOf(
            CampaignExtensionSettingServiceClient::class,
            $this->googleAdsClient->getCampaignExtensionSettingServiceClient()
        );
    }

    public function testGetCampaignFeedServiceClient()
    {
        $this->assertInstanceOf(
            CampaignFeedServiceClient::class,
            $this->googleAdsClient->getCampaignFeedServiceClient()
        );
    }

    public function testGetCampaignGroupServiceClient()
    {
        $this->assertInstanceOf(
            CampaignGroupServiceClient::class,
            $this->googleAdsClient->getCampaignGroupServiceClient()
        );
    }

    public function testGetCampaignLabelServiceClient()
    {
        $this->assertInstanceOf(
            CampaignLabelServiceClient::class,
            $this->googleAdsClient->getCampaignLabelServiceClient()
        );
    }

    public function testGetCampaignServiceClient()
    {
        $this->assertInstanceOf(
            CampaignServiceClient::class,
            $this->googleAdsClient->getCampaignServiceClient()
        );
    }

    public function testGetCampaignSharedSetServiceClient()
    {
        $this->assertInstanceOf(
            CampaignSharedSetServiceClient::class,
            $this->googleAdsClient->getCampaignSharedSetServiceClient()
        );
    }

    public function testGetConversionActionServiceClient()
    {
        $this->assertInstanceOf(
            ConversionActionServiceClient::class,
            $this->googleAdsClient->getConversionActionServiceClient()
        );
    }

    public function testGetConversionAdjustmentUploadServiceClient()
    {
        $this->assertInstanceOf(
            ConversionAdjustmentUploadServiceClient::class,
            $this->googleAdsClient->getConversionAdjustmentUploadServiceClient()
        );
    }

    public function testGetConversionCustomVariableServiceClient()
    {
        $this->assertInstanceOf(
            ConversionCustomVariableServiceClient::class,
            $this->googleAdsClient->getConversionCustomVariableServiceClient()
        );
    }

    public function testGetConversionGoalCampaignConfigServiceClient()
    {
        $this->assertInstanceOf(
            ConversionGoalCampaignConfigServiceClient::class,
            $this->googleAdsClient->getConversionGoalCampaignConfigServiceClient()
        );
    }

    public function testGetConversionUploadServiceClient()
    {
        $this->assertInstanceOf(
            ConversionUploadServiceClient::class,
            $this->googleAdsClient->getConversionUploadServiceClient()
        );
    }

    public function testGetConversionValueRuleServiceClient()
    {
        $this->assertInstanceOf(
            ConversionValueRuleServiceClient::class,
            $this->googleAdsClient->getConversionValueRuleServiceClient()
        );
    }

    public function testGetConversionValueRuleSetServiceClient()
    {
        $this->assertInstanceOf(
            ConversionValueRuleSetServiceClient::class,
            $this->googleAdsClient->getConversionValueRuleSetServiceClient()
        );
    }

    public function testGetCustomAudienceServiceClient()
    {
        $this->assertInstanceOf(
            CustomAudienceServiceClient::class,
            $this->googleAdsClient->getCustomAudienceServiceClient()
        );
    }

    public function testGetCustomConversionGoalServiceClient()
    {
        $this->assertInstanceOf(
            CustomConversionGoalServiceClient::class,
            $this->googleAdsClient->getCustomConversionGoalServiceClient()
        );
    }

    public function testGetCustomerAssetServiceClient()
    {
        $this->assertInstanceOf(
            CustomerAssetServiceClient::class,
            $this->googleAdsClient->getCustomerAssetServiceClient()
        );
    }

    public function testGetCustomerClientLinkServiceClient()
    {
        $this->assertInstanceOf(
            CustomerClientLinkServiceClient::class,
            $this->googleAdsClient->getCustomerClientLinkServiceClient()
        );
    }

    public function testGetCustomerConversionGoalServiceClient()
    {
        $this->assertInstanceOf(
            CustomerConversionGoalServiceClient::class,
            $this->googleAdsClient->getCustomerConversionGoalServiceClient()
        );
    }

    public function testGetCustomerCustomizerServiceClient()
    {
        $this->assertInstanceOf(
            CustomerCustomizerServiceClient::class,
            $this->googleAdsClient->getCustomerCustomizerServiceClient()
        );
    }

    public function testGetCustomerExtensionSettingServiceClient()
    {
        $this->assertInstanceOf(
            CustomerExtensionSettingServiceClient::class,
            $this->googleAdsClient->getCustomerExtensionSettingServiceClient()
        );
    }

    public function testGetCustomerFeedServiceClient()
    {
        $this->assertInstanceOf(
            CustomerFeedServiceClient::class,
            $this->googleAdsClient->getCustomerFeedServiceClient()
        );
    }

    public function testGetCustomerLabelServiceClient()
    {
        $this->assertInstanceOf(
            CustomerLabelServiceClient::class,
            $this->googleAdsClient->getCustomerLabelServiceClient()
        );
    }

    public function testGetCustomerManagerLinkServiceClient()
    {
        $this->assertInstanceOf(
            CustomerManagerLinkServiceClient::class,
            $this->googleAdsClient->getCustomerManagerLinkServiceClient()
        );
    }

    public function testGetCustomerNegativeCriterionServiceClient()
    {
        $this->assertInstanceOf(
            CustomerNegativeCriterionServiceClient::class,
            $this->googleAdsClient->getCustomerNegativeCriterionServiceClient()
        );
    }

    public function testGetCustomerServiceClient()
    {
        $this->assertInstanceOf(
            CustomerServiceClient::class,
            $this->googleAdsClient->getCustomerServiceClient()
        );
    }

    public function testGetCustomerUserAccessInvitationServiceClient()
    {
        $this->assertInstanceOf(
            CustomerUserAccessInvitationServiceClient::class,
            $this->googleAdsClient->getCustomerUserAccessInvitationServiceClient()
        );
    }

    public function testGetCustomerUserAccessServiceClient()
    {
        $this->assertInstanceOf(
            CustomerUserAccessServiceClient::class,
            $this->googleAdsClient->getCustomerUserAccessServiceClient()
        );
    }

    public function testGetCustomInterestServiceClient()
    {
        $this->assertInstanceOf(
            CustomInterestServiceClient::class,
            $this->googleAdsClient->getCustomInterestServiceClient()
        );
    }

    public function testGetCustomizerAttributeServiceClient()
    {
        $this->assertInstanceOf(
            CustomizerAttributeServiceClient::class,
            $this->googleAdsClient->getCustomizerAttributeServiceClient()
        );
    }

    public function testGetExperimentArmServiceClient()
    {
        $this->assertInstanceOf(
            ExperimentArmServiceClient::class,
            $this->googleAdsClient->getExperimentArmServiceClient()
        );
    }

    public function testGetExperimentServiceClient()
    {
        $this->assertInstanceOf(
            ExperimentServiceClient::class,
            $this->googleAdsClient->getExperimentServiceClient()
        );
    }

    public function testGetExtensionFeedItemServiceClient()
    {
        $this->assertInstanceOf(
            ExtensionFeedItemServiceClient::class,
            $this->googleAdsClient->getExtensionFeedItemServiceClient()
        );
    }

    public function testGetFeedItemServiceClient()
    {
        $this->assertInstanceOf(
            FeedItemServiceClient::class,
            $this->googleAdsClient->getFeedItemServiceClient()
        );
    }

    public function testGetFeedItemSetLinkServiceClient()
    {
        $this->assertInstanceOf(
            FeedItemSetLinkServiceClient::class,
            $this->googleAdsClient->getFeedItemSetLinkServiceClient()
        );
    }

    public function testGetFeedItemSetServiceClient()
    {
        $this->assertInstanceOf(
            FeedItemSetServiceClient::class,
            $this->googleAdsClient->getFeedItemSetServiceClient()
        );
    }

    public function testGetFeedItemTargetServiceClient()
    {
        $this->assertInstanceOf(
            FeedItemTargetServiceClient::class,
            $this->googleAdsClient->getFeedItemTargetServiceClient()
        );
    }

    public function testGetFeedMappingServiceClient()
    {
        $this->assertInstanceOf(
            FeedMappingServiceClient::class,
            $this->googleAdsClient->getFeedMappingServiceClient()
        );
    }

    public function testGetFeedServiceClient()
    {
        $this->assertInstanceOf(
            FeedServiceClient::class,
            $this->googleAdsClient->getFeedServiceClient()
        );
    }

    public function testGetGeoTargetConstantServiceClient()
    {
        $this->assertInstanceOf(
            GeoTargetConstantServiceClient::class,
            $this->googleAdsClient->getGeoTargetConstantServiceClient()
        );
    }

    public function testGetGoogleAdsFieldServiceClient()
    {
        $this->assertInstanceOf(
            GoogleAdsFieldServiceClient::class,
            $this->googleAdsClient->getGoogleAdsFieldServiceClient()
        );
    }

    public function testGetGoogleAdsServiceClient()
    {
        $this->assertInstanceOf(
            GoogleAdsServiceClient::class,
            $this->googleAdsClient->getGoogleAdsServiceClient()
        );
    }

    public function testGetInvoiceServiceClient()
    {
        $this->assertInstanceOf(
            InvoiceServiceClient::class,
            $this->googleAdsClient->getInvoiceServiceClient()
        );
    }

    public function testGetKeywordPlanAdGroupKeywordServiceClient()
    {
        $this->assertInstanceOf(
            KeywordPlanAdGroupKeywordServiceClient::class,
            $this->googleAdsClient->getKeywordPlanAdGroupKeywordServiceClient()
        );
    }

    public function testGetKeywordPlanAdGroupServiceClient()
    {
        $this->assertInstanceOf(
            KeywordPlanAdGroupServiceClient::class,
            $this->googleAdsClient->getKeywordPlanAdGroupServiceClient()
        );
    }

    public function testGetKeywordPlanCampaignKeywordServiceClient()
    {
        $this->assertInstanceOf(
            KeywordPlanCampaignKeywordServiceClient::class,
            $this->googleAdsClient->getKeywordPlanCampaignKeywordServiceClient()
        );
    }

    public function testGetKeywordPlanCampaignServiceClient()
    {
        $this->assertInstanceOf(
            KeywordPlanCampaignServiceClient::class,
            $this->googleAdsClient->getKeywordPlanCampaignServiceClient()
        );
    }

    public function testGetKeywordPlanIdeaServiceClient()
    {
        $this->assertInstanceOf(
            KeywordPlanIdeaServiceClient::class,
            $this->googleAdsClient->getKeywordPlanIdeaServiceClient()
        );
    }

    public function testGetKeywordPlanServiceClient()
    {
        $this->assertInstanceOf(
            KeywordPlanServiceClient::class,
            $this->googleAdsClient->getKeywordPlanServiceClient()
        );
    }

    public function testGetKeywordThemeConstantServiceClient()
    {
        $this->assertInstanceOf(
            KeywordThemeConstantServiceClient::class,
            $this->googleAdsClient->getKeywordThemeConstantServiceClient()
        );
    }

    public function testGetLabelServiceClient()
    {
        $this->assertInstanceOf(
            LabelServiceClient::class,
            $this->googleAdsClient->getLabelServiceClient()
        );
    }

    public function testGetMediaFileServiceClient()
    {
        $this->assertInstanceOf(
            MediaFileServiceClient::class,
            $this->googleAdsClient->getMediaFileServiceClient()
        );
    }

    public function testGetMerchantCenterLinkServiceClient()
    {
        $this->assertInstanceOf(
            MerchantCenterLinkServiceClient::class,
            $this->googleAdsClient->getMerchantCenterLinkServiceClient()
        );
    }

    public function testGetOfflineUserDataJobServiceClient()
    {
        $this->assertInstanceOf(
            OfflineUserDataJobServiceClient::class,
            $this->googleAdsClient->getOfflineUserDataJobServiceClient()
        );
    }

    public function testGetPaymentsAccountServiceClient()
    {
        $this->assertInstanceOf(
            PaymentsAccountServiceClient::class,
            $this->googleAdsClient->getPaymentsAccountServiceClient()
        );
    }

    public function testGetReachPlanServiceClient()
    {
        $this->assertInstanceOf(
            ReachPlanServiceClient::class,
            $this->googleAdsClient->getReachPlanServiceClient()
        );
    }

    public function testGetRecommendationServiceClient()
    {
        $this->assertInstanceOf(
            RecommendationServiceClient::class,
            $this->googleAdsClient->getRecommendationServiceClient()
        );
    }

    public function testGetRemarketingActionServiceClient()
    {
        $this->assertInstanceOf(
            RemarketingActionServiceClient::class,
            $this->googleAdsClient->getRemarketingActionServiceClient()
        );
    }

    public function testGetSharedCriterionServiceClient()
    {
        $this->assertInstanceOf(
            SharedCriterionServiceClient::class,
            $this->googleAdsClient->getSharedCriterionServiceClient()
        );
    }

    public function testGetSharedSetServiceClient()
    {
        $this->assertInstanceOf(
            SharedSetServiceClient::class,
            $this->googleAdsClient->getSharedSetServiceClient()
        );
    }

    public function testGetSmartCampaignSettingServiceClient()
    {
        $this->assertInstanceOf(
            SmartCampaignSettingServiceClient::class,
            $this->googleAdsClient->getSmartCampaignSettingServiceClient()
        );
    }

    public function testGetSmartCampaignSuggestServiceClient()
    {
        $this->assertInstanceOf(
            SmartCampaignSuggestServiceClient::class,
            $this->googleAdsClient->getSmartCampaignSuggestServiceClient()
        );
    }

    public function testGetThirdPartyAppAnalyticsLinkServiceClient()
    {
        $this->assertInstanceOf(
            ThirdPartyAppAnalyticsLinkServiceClient::class,
            $this->googleAdsClient->getThirdPartyAppAnalyticsLinkServiceClient()
        );
    }

    public function testGetUserDataServiceClient()
    {
        $this->assertInstanceOf(
            UserDataServiceClient::class,
            $this->googleAdsClient->getUserDataServiceClient()
        );
    }

    public function testGetUserListServiceClient()
    {
        $this->assertInstanceOf(
            UserListServiceClient::class,
            $this->googleAdsClient->getUserListServiceClient()
        );
    }
}
