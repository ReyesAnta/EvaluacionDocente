<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/reports/v1beta/reports.proto

namespace Google\Shopping\Merchant\Reports\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result row returned from the search query.
 * Only the message corresponding to the queried table is populated in the
 * response. Within the populated message, only the fields requested explicitly
 * in the query are populated.
 *
 * Generated from protobuf message <code>google.shopping.merchant.reports.v1beta.ReportRow</code>
 */
class ReportRow extends \Google\Protobuf\Internal\Message
{
    /**
     * Fields available for query in `product_performance_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.ProductPerformanceView product_performance_view = 1;</code>
     */
    protected $product_performance_view = null;
    /**
     * Fields available for query in `non_product_performance_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.NonProductPerformanceView non_product_performance_view = 7;</code>
     */
    protected $non_product_performance_view = null;
    /**
     * Fields available for query in `product_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.ProductView product_view = 2;</code>
     */
    protected $product_view = null;
    /**
     * Fields available for query in `price_competitiveness_product_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.PriceCompetitivenessProductView price_competitiveness_product_view = 3;</code>
     */
    protected $price_competitiveness_product_view = null;
    /**
     * Fields available for query in `price_insights_product_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.PriceInsightsProductView price_insights_product_view = 4;</code>
     */
    protected $price_insights_product_view = null;
    /**
     * Fields available for query in `best_sellers_product_cluster_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.BestSellersProductClusterView best_sellers_product_cluster_view = 5;</code>
     */
    protected $best_sellers_product_cluster_view = null;
    /**
     * Fields available for query in `best_sellers_brand_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.BestSellersBrandView best_sellers_brand_view = 6;</code>
     */
    protected $best_sellers_brand_view = null;
    /**
     * Fields available for query in `competitive_visibility_competitor_view`
     * table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.CompetitiveVisibilityCompetitorView competitive_visibility_competitor_view = 8;</code>
     */
    protected $competitive_visibility_competitor_view = null;
    /**
     * Fields available for query in `competitive_visibility_top_merchant_view`
     * table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.CompetitiveVisibilityTopMerchantView competitive_visibility_top_merchant_view = 9;</code>
     */
    protected $competitive_visibility_top_merchant_view = null;
    /**
     * Fields available for query in `competitive_visibility_benchmark_view`
     * table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.CompetitiveVisibilityBenchmarkView competitive_visibility_benchmark_view = 10;</code>
     */
    protected $competitive_visibility_benchmark_view = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Shopping\Merchant\Reports\V1beta\ProductPerformanceView $product_performance_view
     *           Fields available for query in `product_performance_view` table.
     *     @type \Google\Shopping\Merchant\Reports\V1beta\NonProductPerformanceView $non_product_performance_view
     *           Fields available for query in `non_product_performance_view` table.
     *     @type \Google\Shopping\Merchant\Reports\V1beta\ProductView $product_view
     *           Fields available for query in `product_view` table.
     *     @type \Google\Shopping\Merchant\Reports\V1beta\PriceCompetitivenessProductView $price_competitiveness_product_view
     *           Fields available for query in `price_competitiveness_product_view` table.
     *     @type \Google\Shopping\Merchant\Reports\V1beta\PriceInsightsProductView $price_insights_product_view
     *           Fields available for query in `price_insights_product_view` table.
     *     @type \Google\Shopping\Merchant\Reports\V1beta\BestSellersProductClusterView $best_sellers_product_cluster_view
     *           Fields available for query in `best_sellers_product_cluster_view` table.
     *     @type \Google\Shopping\Merchant\Reports\V1beta\BestSellersBrandView $best_sellers_brand_view
     *           Fields available for query in `best_sellers_brand_view` table.
     *     @type \Google\Shopping\Merchant\Reports\V1beta\CompetitiveVisibilityCompetitorView $competitive_visibility_competitor_view
     *           Fields available for query in `competitive_visibility_competitor_view`
     *           table.
     *     @type \Google\Shopping\Merchant\Reports\V1beta\CompetitiveVisibilityTopMerchantView $competitive_visibility_top_merchant_view
     *           Fields available for query in `competitive_visibility_top_merchant_view`
     *           table.
     *     @type \Google\Shopping\Merchant\Reports\V1beta\CompetitiveVisibilityBenchmarkView $competitive_visibility_benchmark_view
     *           Fields available for query in `competitive_visibility_benchmark_view`
     *           table.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Reports\V1Beta\Reports::initOnce();
        parent::__construct($data);
    }

    /**
     * Fields available for query in `product_performance_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.ProductPerformanceView product_performance_view = 1;</code>
     * @return \Google\Shopping\Merchant\Reports\V1beta\ProductPerformanceView|null
     */
    public function getProductPerformanceView()
    {
        return $this->product_performance_view;
    }

    public function hasProductPerformanceView()
    {
        return isset($this->product_performance_view);
    }

    public function clearProductPerformanceView()
    {
        unset($this->product_performance_view);
    }

    /**
     * Fields available for query in `product_performance_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.ProductPerformanceView product_performance_view = 1;</code>
     * @param \Google\Shopping\Merchant\Reports\V1beta\ProductPerformanceView $var
     * @return $this
     */
    public function setProductPerformanceView($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Reports\V1beta\ProductPerformanceView::class);
        $this->product_performance_view = $var;

        return $this;
    }

    /**
     * Fields available for query in `non_product_performance_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.NonProductPerformanceView non_product_performance_view = 7;</code>
     * @return \Google\Shopping\Merchant\Reports\V1beta\NonProductPerformanceView|null
     */
    public function getNonProductPerformanceView()
    {
        return $this->non_product_performance_view;
    }

    public function hasNonProductPerformanceView()
    {
        return isset($this->non_product_performance_view);
    }

    public function clearNonProductPerformanceView()
    {
        unset($this->non_product_performance_view);
    }

    /**
     * Fields available for query in `non_product_performance_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.NonProductPerformanceView non_product_performance_view = 7;</code>
     * @param \Google\Shopping\Merchant\Reports\V1beta\NonProductPerformanceView $var
     * @return $this
     */
    public function setNonProductPerformanceView($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Reports\V1beta\NonProductPerformanceView::class);
        $this->non_product_performance_view = $var;

        return $this;
    }

    /**
     * Fields available for query in `product_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.ProductView product_view = 2;</code>
     * @return \Google\Shopping\Merchant\Reports\V1beta\ProductView|null
     */
    public function getProductView()
    {
        return $this->product_view;
    }

    public function hasProductView()
    {
        return isset($this->product_view);
    }

    public function clearProductView()
    {
        unset($this->product_view);
    }

    /**
     * Fields available for query in `product_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.ProductView product_view = 2;</code>
     * @param \Google\Shopping\Merchant\Reports\V1beta\ProductView $var
     * @return $this
     */
    public function setProductView($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Reports\V1beta\ProductView::class);
        $this->product_view = $var;

        return $this;
    }

    /**
     * Fields available for query in `price_competitiveness_product_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.PriceCompetitivenessProductView price_competitiveness_product_view = 3;</code>
     * @return \Google\Shopping\Merchant\Reports\V1beta\PriceCompetitivenessProductView|null
     */
    public function getPriceCompetitivenessProductView()
    {
        return $this->price_competitiveness_product_view;
    }

    public function hasPriceCompetitivenessProductView()
    {
        return isset($this->price_competitiveness_product_view);
    }

    public function clearPriceCompetitivenessProductView()
    {
        unset($this->price_competitiveness_product_view);
    }

    /**
     * Fields available for query in `price_competitiveness_product_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.PriceCompetitivenessProductView price_competitiveness_product_view = 3;</code>
     * @param \Google\Shopping\Merchant\Reports\V1beta\PriceCompetitivenessProductView $var
     * @return $this
     */
    public function setPriceCompetitivenessProductView($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Reports\V1beta\PriceCompetitivenessProductView::class);
        $this->price_competitiveness_product_view = $var;

        return $this;
    }

    /**
     * Fields available for query in `price_insights_product_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.PriceInsightsProductView price_insights_product_view = 4;</code>
     * @return \Google\Shopping\Merchant\Reports\V1beta\PriceInsightsProductView|null
     */
    public function getPriceInsightsProductView()
    {
        return $this->price_insights_product_view;
    }

    public function hasPriceInsightsProductView()
    {
        return isset($this->price_insights_product_view);
    }

    public function clearPriceInsightsProductView()
    {
        unset($this->price_insights_product_view);
    }

    /**
     * Fields available for query in `price_insights_product_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.PriceInsightsProductView price_insights_product_view = 4;</code>
     * @param \Google\Shopping\Merchant\Reports\V1beta\PriceInsightsProductView $var
     * @return $this
     */
    public function setPriceInsightsProductView($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Reports\V1beta\PriceInsightsProductView::class);
        $this->price_insights_product_view = $var;

        return $this;
    }

    /**
     * Fields available for query in `best_sellers_product_cluster_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.BestSellersProductClusterView best_sellers_product_cluster_view = 5;</code>
     * @return \Google\Shopping\Merchant\Reports\V1beta\BestSellersProductClusterView|null
     */
    public function getBestSellersProductClusterView()
    {
        return $this->best_sellers_product_cluster_view;
    }

    public function hasBestSellersProductClusterView()
    {
        return isset($this->best_sellers_product_cluster_view);
    }

    public function clearBestSellersProductClusterView()
    {
        unset($this->best_sellers_product_cluster_view);
    }

    /**
     * Fields available for query in `best_sellers_product_cluster_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.BestSellersProductClusterView best_sellers_product_cluster_view = 5;</code>
     * @param \Google\Shopping\Merchant\Reports\V1beta\BestSellersProductClusterView $var
     * @return $this
     */
    public function setBestSellersProductClusterView($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Reports\V1beta\BestSellersProductClusterView::class);
        $this->best_sellers_product_cluster_view = $var;

        return $this;
    }

    /**
     * Fields available for query in `best_sellers_brand_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.BestSellersBrandView best_sellers_brand_view = 6;</code>
     * @return \Google\Shopping\Merchant\Reports\V1beta\BestSellersBrandView|null
     */
    public function getBestSellersBrandView()
    {
        return $this->best_sellers_brand_view;
    }

    public function hasBestSellersBrandView()
    {
        return isset($this->best_sellers_brand_view);
    }

    public function clearBestSellersBrandView()
    {
        unset($this->best_sellers_brand_view);
    }

    /**
     * Fields available for query in `best_sellers_brand_view` table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.BestSellersBrandView best_sellers_brand_view = 6;</code>
     * @param \Google\Shopping\Merchant\Reports\V1beta\BestSellersBrandView $var
     * @return $this
     */
    public function setBestSellersBrandView($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Reports\V1beta\BestSellersBrandView::class);
        $this->best_sellers_brand_view = $var;

        return $this;
    }

    /**
     * Fields available for query in `competitive_visibility_competitor_view`
     * table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.CompetitiveVisibilityCompetitorView competitive_visibility_competitor_view = 8;</code>
     * @return \Google\Shopping\Merchant\Reports\V1beta\CompetitiveVisibilityCompetitorView|null
     */
    public function getCompetitiveVisibilityCompetitorView()
    {
        return $this->competitive_visibility_competitor_view;
    }

    public function hasCompetitiveVisibilityCompetitorView()
    {
        return isset($this->competitive_visibility_competitor_view);
    }

    public function clearCompetitiveVisibilityCompetitorView()
    {
        unset($this->competitive_visibility_competitor_view);
    }

    /**
     * Fields available for query in `competitive_visibility_competitor_view`
     * table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.CompetitiveVisibilityCompetitorView competitive_visibility_competitor_view = 8;</code>
     * @param \Google\Shopping\Merchant\Reports\V1beta\CompetitiveVisibilityCompetitorView $var
     * @return $this
     */
    public function setCompetitiveVisibilityCompetitorView($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Reports\V1beta\CompetitiveVisibilityCompetitorView::class);
        $this->competitive_visibility_competitor_view = $var;

        return $this;
    }

    /**
     * Fields available for query in `competitive_visibility_top_merchant_view`
     * table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.CompetitiveVisibilityTopMerchantView competitive_visibility_top_merchant_view = 9;</code>
     * @return \Google\Shopping\Merchant\Reports\V1beta\CompetitiveVisibilityTopMerchantView|null
     */
    public function getCompetitiveVisibilityTopMerchantView()
    {
        return $this->competitive_visibility_top_merchant_view;
    }

    public function hasCompetitiveVisibilityTopMerchantView()
    {
        return isset($this->competitive_visibility_top_merchant_view);
    }

    public function clearCompetitiveVisibilityTopMerchantView()
    {
        unset($this->competitive_visibility_top_merchant_view);
    }

    /**
     * Fields available for query in `competitive_visibility_top_merchant_view`
     * table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.CompetitiveVisibilityTopMerchantView competitive_visibility_top_merchant_view = 9;</code>
     * @param \Google\Shopping\Merchant\Reports\V1beta\CompetitiveVisibilityTopMerchantView $var
     * @return $this
     */
    public function setCompetitiveVisibilityTopMerchantView($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Reports\V1beta\CompetitiveVisibilityTopMerchantView::class);
        $this->competitive_visibility_top_merchant_view = $var;

        return $this;
    }

    /**
     * Fields available for query in `competitive_visibility_benchmark_view`
     * table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.CompetitiveVisibilityBenchmarkView competitive_visibility_benchmark_view = 10;</code>
     * @return \Google\Shopping\Merchant\Reports\V1beta\CompetitiveVisibilityBenchmarkView|null
     */
    public function getCompetitiveVisibilityBenchmarkView()
    {
        return $this->competitive_visibility_benchmark_view;
    }

    public function hasCompetitiveVisibilityBenchmarkView()
    {
        return isset($this->competitive_visibility_benchmark_view);
    }

    public function clearCompetitiveVisibilityBenchmarkView()
    {
        unset($this->competitive_visibility_benchmark_view);
    }

    /**
     * Fields available for query in `competitive_visibility_benchmark_view`
     * table.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.CompetitiveVisibilityBenchmarkView competitive_visibility_benchmark_view = 10;</code>
     * @param \Google\Shopping\Merchant\Reports\V1beta\CompetitiveVisibilityBenchmarkView $var
     * @return $this
     */
    public function setCompetitiveVisibilityBenchmarkView($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Reports\V1beta\CompetitiveVisibilityBenchmarkView::class);
        $this->competitive_visibility_benchmark_view = $var;

        return $this;
    }

}

