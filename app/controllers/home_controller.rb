class HomeController < ApplicationController
	def index
		@feature = Feature.new
		#@feature = Feature.find(params[:id])
	end
end
