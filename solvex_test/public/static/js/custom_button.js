pimcore.registerNS("pimcore.plugin.customAdmin");
pimcore.plugin.customAdmin = Class.create(pimcore.plugin.admin, {

    initialize: function() {
        this.getClassConfig();
        pimcore.plugin.broker.registerPlugin(this);
    },

    getClassConfig: function() {
        pimcore.object.helpers.addTabSpecificPanel = pimcore.object.helpers.addTabSpecificPanel.wrap(function(callOriginal) {
            // Add your custom button inside the Classification Store component
            callOriginal();

            let classificationStoreCmp = Ext.getCmp("classificationstore");
            if (classificationStoreCmp) {
                // Create a button and attach a handler for the button
                let customButton = new Ext.Button({
                    text: 'Custom Action',
                    handler: function() {
                        pimcore.helpers.loadingShow();
                        Ext.Ajax.request({
                            url: '/custom-action',
                            success: function(response) {
                                pimcore.helpers.showNotification('Success', 'Custom Action was successful', 'success');
                                pimcore.helpers.loadingHide();
                                classificationStoreCmp.reload();
                            },
                            failure: function() {
                                pimcore.helpers.showNotification('Error', 'Action failed', 'error');
                                pimcore.helpers.loadingHide();
                            }
                        });
                    }
                });

                // Add the custom button to the component
                classificationStoreCmp.add(customButton);
            }
        });
    },

    pimcoreReady: function(params, broker) {
        // Executed when the Pimcore admin UI is ready
    }
});

// Instantiate the plugin
new pimcore.plugin.customAdmin();